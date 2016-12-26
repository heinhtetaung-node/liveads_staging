<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{
	private $currency = 'USD'; // currency for the transaction
	private $ec_action = 'Sale'; // for PAYMENTREQUEST_0_PAYMENTACTION, it's either Sale, Order or Authorization
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('flashdealads_model');
		$this->load->model('Payment_model');
		$this->load->library(array('form_validation','session', 'cart'));
        $this->load->helper(array('url','html','form'));
		
		$paypal_details = array(
			// you can get this from your Paypal account, or from your
			// test accounts in Sandbox
			'API_username' => 'myowner_api1.gmail.com', 
			'API_signature' => 'ASLyqTZaUGInyt7G1OrZiFbGoaRBAT.P3aUP6cFByXdYSCJOw5Dmq.Ih', 
			'API_password' => '97FFKK23C5V8VMP5',
			// Paypal_ec defaults sandbox status to true
			// Change to false if you want to go live and
			// update the API credentials above
			// 'sandbox_status' => false,
		);
		$this->load->library('paypal_ec', $paypal_details);
        
	}
	
	function paypal() {
		
		
		
		if ($this->session->userdata('fd_order_id') == null){
			redirect("flashdealads/purchase");
		}
		$fd_order_id = $this->session->userdata('fd_order_id');
		
		$to_buy = array(
			'desc' => 'Purchase from Live Ads 88', 
			'currency' => $this->currency, 
			'type' => $this->ec_action, 
			'return_URL' => site_url('payment/back'), 
			'cancel_URL' => site_url('payment/cancel'), // this goes to this controllers index()
			'shipping_amount' => 0, 
			'get_shipping' => false
			);
		
		foreach($this->cart->contents() as $items) {	
			$temp_product = array(
				'name'=>$items['name'],
				'duration'=>$items['duration'],
				'amount'=>$this->cart->format_number($items['price']),
				'quantity'=>$items['qty'],
				'subtotal'=>$this->cart->format_number($items['subtotal']),
			);
			$to_buy['products'][] = $temp_product;
		}
		
		$this->cart->destroy();
		
		// enquire Paypal API for token
		$set_ec_return = $this->paypal_ec->set_ec($to_buy);
		
		$this->Payment_model->addTableData($set_ec_return, 'paypal_setcheckout');
		
		if (isset($set_ec_return['ec_status']) && ($set_ec_return['ec_status'] === true)) {
			
			$token = urldecode($set_ec_return["TOKEN"]);
			
			$this->flashdealads_model->updateflashDealOrderToken($fd_order_id, array('paypal_token'=>$token));
			// redirect to Paypal
			$this->paypal_ec->redirect_to_paypal($set_ec_return['TOKEN']);
			
			// You could detect your visitor's browser and redirect to Paypal's mobile checkout
			// if they are on a mobile device. Just add a true as the last parameter. It defaults
			// to false
			// $this->paypal_ec->redirect_to_paypal( $set_ec_return['TOKEN'], true);
		} else {
			$this->_error($set_ec_return);
		}
		
	}
	
	/* -------------------------------------------------------------------------------------------------
	* a sample back function that handles
	* --------------------------------------------------------------------------------------------------
	*/
	function back() {
		$fd_order_id = $this->session->userdata('fd_order_id');
		// we are back from Paypal. We need to do GetExpressCheckoutDetails
		// and DoExpressCheckoutPayment to complete.
		$token = $_GET['token'];
		$payer_id = $_GET['PayerID'];
		// GetExpressCheckoutDetails
		$get_ec_return = $this->paypal_ec->get_ec($token);
		
		$this->Payment_model->addTableData($get_ec_return, 'paypal_return');
		if (isset($get_ec_return['ec_status']) && ($get_ec_return['ec_status'] === true)) {
			// at this point, you have all of the data for the transaction.
			// you may want to save the data for future action. what's left to
			// do is to collect the money -- you do that by call DoExpressCheckoutPayment
			// via $this->paypal_ec->do_ec();
			//
			// I suggest to save all of the details of the transaction. You get all that
			// in $get_ec_return array
			$ec_details = array(
				'token' => $token, 
				'payer_id' => $payer_id, 
				'currency' => $get_ec_return["PAYMENTREQUEST_0_CURRENCYCODE"], 
				'amount' => $get_ec_return['PAYMENTREQUEST_0_AMT'], 
				//'IPN_URL' => site_url('payment/ipn'), 
				// in case you want to log the IPN, and you
				// may have to in case of Pending transaction
				'type' => $this->ec_action);
				
			// DoExpressCheckoutPayment
			$do_ec_return = $this->paypal_ec->do_ec($ec_details);

			//$logfile = 'paypal_logs/dopayment_' . uniqid() . '.html';
			//$logdata = "<pre>\r\n" . http_build_query($do_ec_return) . '</pre>';
			//file_put_contents($logfile, $logdata);

			$this->Payment_model->addTableData($do_ec_return, 'paypal_docheckout');
			if (isset($do_ec_return['ec_status']) && ($do_ec_return['ec_status'] === true)) {
				
				$this->flashdealads_model->updateflashDealOrderToken($fd_order_id, array('payment_status'=>'2'));
		
				// at this point, you have collected payment from your customer
				// you may want to process the order now.
				
				$status = 'Success';
				$message= 'Order Completed. <br />
							Thank you. We will process your order now.';
									
				$this->session->set_flashdata('status', $status);
				$this->session->set_flashdata('message', $message);
				$this->session->unset_userdata('fd_order_id');
				redirect('payment/result');
				
				
			} else {
				$this->_error($do_ec_return);
			}
		} else {
			$this->_error($get_ec_return);
		}
	}
	
	
	
	/* -------------------------------------------------------------------------------------------------
	* The location for your IPN_URL that you set for $this->paypal_ec->do_ec(). obviously more needs to
	* be done here. this is just a simple logging example. The /ipnlog folder should the same level as
	* your CodeIgniter's index.php
	* --------------------------------------------------------------------------------------------------
	*/
	function ipn() {
		$logfile = 'paypal_logs/ipnlog/' . uniqid() . '.html';
		$logdata = "<pre>\r\n" . print_r($_POST, true) . '</pre>';
		file_put_contents($logfile, $logdata);
	}
	
	/* -------------------------------------------------------------------------------------------------
	* a simple message to display errors. this should only be used during development
	* --------------------------------------------------------------------------------------------------
	*/
	function _error($ecd) {
		
		$status = 'Error';
		$message = "<br>error at Express Checkout<br>
							<pre>" . print_r($ecd, true) . "</pre>
							<br>CURL error message<br>
							Message:" . $this->session->userdata('curl_error_msg') . "<br>
							Number:" . $this->session->userdata('curl_error_no') . "<br>";
		
		
		
		$this->session->set_flashdata('status', $status);
		$this->session->set_flashdata('message', $message);
		redirect('payment/result');
		
		
	}
	
	function cancel() {
		$token = $_GET["token"];
		$get_ec_return = $this->paypal_ec->get_ec($token);
		$this->Payment_model->addTableData($get_ec_return, 'paypal_cancel');
		
		if ($this->session->userdata('fd_order_id') == null){
			redirect("flashdealads/purchase");
		}
		$fd_order_id = $this->session->userdata('fd_order_id');
		$this->flashdealads_model->updateflashDealOrderToken($fd_order_id, array('payment_status'=>'3'));
		
		$this->session->unset_userdata('fd_order_id');
		
		$this->session->set_flashdata('status', 'Cancel');
		$this->session->set_flashdata('message', '<br>Order Cancel<br>');
		redirect('payment/result');
		
		
	}
	
	function result(){
		if(!$this->session->flashdata('status')){
			redirect('flashdealads/purchase');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flashdealads/payment_result');
		$this->load->view('admin/footer');
	}
	
}