<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Advertise extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$url = $_SERVER['REQUEST_URI'];
		$lastSegment = basename(parse_url($url, PHP_URL_PATH));
		
		if($lastSegment!="register"){
			if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
				// authorize
				//header('location:shop'); //Edited by Hein Htet Aung from redirect('customer/profile');
			}else{
				header("location:../customer/login"); //Edited by Hein Htet Aung from redirect("advertise/signup");
			}
		}
		$this->load->model('Coupon_model');
		$this->load->model('Customer_model');
		$this->load->model('Adscomponent_Model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	
	function index(){
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
			redirect('advertise/shop'); //Edited by Hein Htet Aung from redirect('customer/profile');
		}else{
			redirect("customer/login"); //Edited by Hein Htet Aung from redirect("advertise/signup");
		}
		
	}
	
	function shop(){
		// a new ads component shopping page
		$data['ads'] = $this->Adscomponent_Model->getAllAdsComponent();
		$this->load->view('customer_header');				
		$this->load->view('advertise/shop',$data);
		$this->load->view('footer');
	}
	
	function buyads($id){
		$data['ads'] = $this->Adscomponent_Model->getAdsById($id);
		$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($id);
		/*
		echo $id;
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
		*/
		$this->load->view('customer_header');				
		$this->load->view('advertise/buyads',$data);
		$this->load->view('footer');
	}
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/uploads/customer/'.$image_name, $data);
	}
	
	private function createLogoJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/uploads/brand/'.$image_name, $data);
	}
	
	private function createJPGFromBase64ForShopImages($data, $url_image_data){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/'. $url_image_data, $data);
	}
	
	function signup() {
		$data = array();
		
	
		
		if (isset($_POST['cu_name'])) {
			$subject = 'MyLiveAds Advertise request from website';
	
			$name = 'MyLiveAds';
			$from = 'mailer@liveads88.com';
			$to = 'ktp1101@yahoo.com, patrick@liveads88.com';
			$bcc = 'cayden.liew@sgdatahub.com';
			
			$message = '';
			$message .= 'Name:'.$_POST['cu_name'].'<br/>';
			$message .= 'Mobile:'.$_POST['cu_mobile'].'<br/>';
			$message .= 'Email:'.$_POST['cu_email'].'<br/>';
			$message .= 'Message:'.$_POST['message'].'<br/>';
			
// 			print_r($message);
// 			exit;
			$config['mailtype'] = 'html';
			$config['protocol'] = 'smtp';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8'; //to support chinese
			$config['wordwrap'] = TRUE;
			$config['smtp_host'] = 'mail.liveads88.com';
			$config['smtp_user'] = 'mailer@liveads88.com';
			$config['smtp_pass'] = 'p@$$w0rd123456';
			$this->load->library('email', $config); 
			$this->email->from($from, $name);
	
			$this->email->reply_to($from, $name);
			$this->email->to($to);
			$this->email->bcc($bcc);
			$this->email->subject($subject);
			$this->email->message($message);
	
		
			$this->email->send();
			$this->email->clear();
				$this->session->set_flashdata('msg', 'Thank you for your interest in advertising with us, we will contact you shortly.');
		}
		
		$this->load->view('header');
				
		$this->load->view('advertise/index',$data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		
		$data['category'] = $this->Customer_model->getCategory();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			 //form validation	
			 
			$this->form_validation->set_rules('cu_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('cu_email', ' Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('cu_mobile', ' Mobile', 'trim|required');
			$this->form_validation->set_rules('cu_address', 'Address', 'trim|required');
			//$this->form_validation->set_rules('cu_postal', 'Postal code', 'trim|required');
			$this->form_validation->set_rules('cu_description', 'Description', 'trim|required');
			$this->form_validation->set_rules('cu_service_type', 'Service Type', 'trim|required');
			$this->form_validation->set_rules('cu_tag', 'Tag', 'trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');
			
			$this->form_validation->set_rules('cu_password', 'Password', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('cu_password_confirm', 'Confirm Password', 'required|trim|matches[cu_password]');
			
			$this->form_validation->set_message('invalid_postal', 'Invalid postal code');
			if($this->input->post('cu_lat')=="" && $this->input->post('cu_long')==""){
				$this->form_validation->set_rules('cu_postal', 'Postal','invalid_postal');
			}
			
			$this->form_validation->set_rules('cu_image', 'Image', 'trim|required');
			$this->form_validation->set_rules('cu_logo', 'Logo Image', 'trim');
			
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){

				$data['shop_image_return'] = $this->input->post('data_shop_image');
				$data['image_sort_order_return'] = $this->input->post('image_sort_order');
				$data['logo_return'] = $this->input->post('cu_logo');
				$data['company_return'] = $this->input->post('cu_image');
				$this->load->view('header');
				
				$this->load->view('advertise/add',$data);
				$this->load->view('footer');
			}else{

				$data['tags'] = array_filter(explode(',', $this->security->xss_clean($this->input->post('cu_tag'))));
				
				
				 ///////////////////////////////////////////////////
				 if($this->input->post('cu_image')){
						$company_image =  'c_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64($this->input->post('cu_image'), $company_image);
					}
				if($this->input->post('cu_logo')){
					$cu_logo =  'l_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createLogoJPGFromBase64($this->input->post('cu_logo'), $cu_logo);
				}else{
					$cu_logo="";
				}
				 ///////////////////////////////////////////////////
				 
				 
				 
				 $data_to_store = array(
					'cu_name' => $this->security->xss_clean($this->input->post('cu_name')),
					'cu_email' => $this->security->xss_clean($this->input->post('cu_email')),
					'cu_mobile' => $this->security->xss_clean($this->input->post('cu_mobile')),
					'cu_address' => $this->security->xss_clean($this->input->post('cu_address')),
					'cu_postal' => $this->security->xss_clean($this->input->post('cu_postal')),
					'cu_lat' => $this->security->xss_clean($this->input->post('cu_lat')),
					'cu_long' => $this->security->xss_clean($this->input->post('cu_long')),
					'cu_description' => $this->security->xss_clean($this->input->post('cu_description')),
					'cu_website' => $this->security->xss_clean($this->input->post('cu_website')),
					'category_id' => $this->security->xss_clean($this->input->post('category')),
					'cu_logo_name' => $cu_logo,
					'cu_image_name' => $company_image,
					'cu_branch'=>$this->security->xss_clean($this->input->post('cu_branch')),
					'cu_hour'=>$this->security->xss_clean($this->input->post('cu_hour')),
					'cu_service_type' => $this->security->xss_clean($this->input->post('cu_service_type')),
					'cu_password' => hash('sha256',trim($this->security->xss_clean($this->input->post('cu_password')))),
					'cu_created_by' => 1
				);
				if($id = $this->Customer_model->addCustomer($data_to_store)){
					$this->Customer_model->addCustomerTag($id,$data['tags']);
					
					
					///////////////////////////////////////////////
					$shop_images_array 		= $this->input->post('data_shop_image');
					$image_sort_order_array = $this->input->post('image_sort_order');
					if(count($shop_images_array) > 0){
						$shop_image_name = array();
						
						//check folder not exists, create folder
						//if exists, remove all file as it is add method
						$shop_image_path = getcwd() . '/app_liveads88/upload/shop_image/'.$id;
						if (!file_exists($shop_image_path)) {
							mkdir($shop_image_path, 0777, true);
						}else{
							$files = glob($shop_image_path.'/*'); // get all file names
							foreach($files as $file){ // iterate files
							  if(is_file($file))
								unlink($file); // delete file
							}
						}
						
						for($i=0; $i < count($shop_images_array); $i++){
							$shop_image_name[$i]['cu_id'] 	=  $id;
							$shop_image_name[$i]['sp_name'] =  'upload/shop_image/' . $id . '/' . $id . '_sh_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
							$shop_image_name[$i]['sort_order'] = $image_sort_order_array[$i] ;
							$this->createJPGFromBase64ForShopImages($shop_images_array[$i], $shop_image_name[$i]['sp_name']);
						}
						
						$this->Customer_model->insertShopImageBatchArray($shop_image_name);
					}
					
					
					///////////////////////////////////////////////
							
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully Register.</div>');
					redirect(current_url());
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error saving customer into the system!</div>');
				}
				$this->load->view('header');
				
				$this->load->view('advertise/add',$data);
				$this->load->view('footer');
			}
			
		}else{
			$this->load->view('customer_header');
		
			$this->load->view('advertise/add',$data);
			$this->load->view('footer');
		}
	}
	
	public function coupon_addcart(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			$id=$this->input->post('ads_id');
			$data['ads'] = $this->Adscomponent_Model->getAdsById($id);
			$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($id);
		
			$this->form_validation->set_rules('cp_name', ' Coupon Name', 'trim|required');
			$this->form_validation->set_rules('cp_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('cp_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['cp_image_return'] = $this->input->post('cp_image');
				
				$this->load->view('customer_header');				
				$this->load->view('advertise/buyads',$data);
				$this->load->view('footer');
				
			}else{					
				$cp_image="";	
				if($this->input->post('cp_image')){
					$cp_image =  'cp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->coupon_createJPGFromBase64($this->input->post('cp_image'), $cp_image);
				}
								 
				$data_to_store = array(
					'cp_name' 		 => $this->security->xss_clean($this->input->post('cp_name')),
					'cp_description' => $this->security->xss_clean($this->input->post('cp_description')),
					'customer_id' 	 => $this->session->userdata('cu_id'),
					'cp_img_name' => $cp_image,
					'ispurchased' => 1,
					'payment_id' => '',
					'purchase_itemid' => '',
				);
				
				$this->commonaddcart($data_to_store, $data, $this->input->post('price_option'), $id);
			}			
		}
	}
	
	public function promotion_addcart(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			$id=$this->input->post('ads_id');
			$data['ads'] = $this->Adscomponent_Model->getAdsById($id);
			$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($id);
		
			$this->form_validation->set_rules('pro_name', ' Product Name', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('customer_header');				
				$this->load->view('advertise/buyads',$data);
				$this->load->view('footer');
				
			}else{					
				$pro_image="";
				if($this->input->post('pro_image')){
					// echo $_FILES["pro_image"]["tmp_name"]; exit;
					// $targetPath = getcwd() . '/app_liveads88/uploads/product/';			 
					// $temp = explode(".", $_FILES["pro_image"]["name"]);
					// $pro_image = round(microtime(true)) . '.' . end($temp);
					// move_uploaded_file($_FILES["pro_image"]["tmp_name"], $targetPath.$pro_image);
					$pro_image =  ''. round(microtime(true)) . '.jpg';
					$this->pro_createJPGFromBase64($this->input->post('pro_image'), $pro_image);
				}
								 
				$data_to_store = array(
					'pro_title' => $this->security->xss_clean($this->input->post('pro_name')),
					'pro_price' => $this->security->xss_clean($this->input->post('pro_price')),
					'customer_id' 	 => $this->session->userdata('cu_id'),
					'pro_description' => $this->security->xss_clean($this->input->post('pro_description')),
					'pro_image_name' => $pro_image,
					'pro_is_promotion' => 1,
					'ispurchased' => 1,
					'payment_id' => '',
					'purchase_itemid' => '',
				);
				
				$this->commonaddcart($data_to_store, $data, $this->input->post('price_option'), $id);
			}			
		}
	}
	
	public function event_addcart(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			$id=$this->input->post('ads_id');
			$data['ads'] = $this->Adscomponent_Model->getAdsById($id);
			$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($id);
		
			$this->form_validation->set_rules('ev_title', ' Event Name', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('customer_header');				
				$this->load->view('advertise/buyads',$data);
				$this->load->view('footer');
				
			}else{					
				$ev_image="";
				if($this->input->post('ev_image')){
					$ev_image =  ''. round(microtime(true)) . '.jpg';
					//echo $ev_image; exit;
					$this->event_createJPGFromBase64($this->input->post('ev_image'), $ev_image);
				}
								 
				$data_to_store = array(
					'ev_title' => $this->security->xss_clean($this->input->post('ev_title')),
					'ev_location' => $this->security->xss_clean($this->input->post('ev_location')),
					'ev_description' => $this->security->xss_clean($this->input->post('ev_description')),
					'customer_id' 	 => $this->session->userdata('cu_id'),
					'ev_img_name' => $ev_image,
					'ispurchased' => 1,
					'payment_id' => '',
					'purchase_itemid' => '',
				);
				
				$this->commonaddcart($data_to_store, $data, $this->input->post('price_option'), $id);
			}			
		}
	}
	
	public function job_addcart(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			$id=$this->input->post('ads_id');
			$data['ads'] = $this->Adscomponent_Model->getAdsById($id);
			$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($id);
		
			$this->form_validation->set_rules('jb_name', ' Job Name', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('customer_header');				
				$this->load->view('advertise/buyads',$data);
				$this->load->view('footer');
				
			}else{					
							 
				$data_to_store = array(
					'jb_name' => $this->security->xss_clean($this->input->post('jb_name')),
					'jb_location' => $this->security->xss_clean($this->input->post('jb_location')),
					'jb_salary' => $this->security->xss_clean($this->input->post('jb_salary')),
					'customer_id' 	 => $this->session->userdata('cu_id'),
					'ispurchased' => 1,
					'payment_id' => '',
					'purchase_itemid' => '',
				);
				
				$this->commonaddcart($data_to_store, $data, $this->input->post('price_option'), $id);
			}			
		}		
	}
	
	private function commonaddcart($data_to_store, $data, $price_option, $id){
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				
		$this->session->set_flashdata('addedcart', true);
		$data_to_store_arr=array();
		array_push($data_to_store_arr, $data_to_store);
		$arr=array(
			'id' => $id,
			'ads' => $data['ads'],
			'adsprice' => $data['adsprice'],
			'selectedpriceid' => $price_option,
			'qty' => 1,
			'data' => $data_to_store_arr
		);
		$newcart=array();
		
		if ($this->session->userdata('cart')!="") {
			$carts=$this->session->userdata('cart');
			$datahas=false;
			for($i=0; $i<sizeof($carts); $i++){
				if($carts[$i]['id']==$id && $carts[$i]['selectedpriceid']==$arr['selectedpriceid']){
					$datahas=true;
					$carts[$i]['qty']++;
					array_push($carts[$i]['data'], $data_to_store);
					$this->session->set_userdata('cart', $carts);								
					break;
				}
			}
			
			if($datahas==false){
				array_push($carts, $arr);
				$this->session->set_userdata('cart', $carts);
			}
			
		}else{
			array_push($newcart, $arr);
			$this->session->set_userdata('cart', $newcart);
		}
		
		if(isset($_POST['addcart'])){
			$this->load->view('customer_header');				
			$this->load->view('advertise/buyads',$data);
			$this->load->view('footer');
		}
		
		if(isset($_POST['checkout'])){
			redirect('advertise/checkout');
		}
	}
	
	
	private function coupon_createJPGFromBase64($data, $image_name){
		//var_dump($data); exit;
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/uploads/coupon/'.$image_name, $data);
	}
	
	private function pro_createJPGFromBase64($data, $image_name){
		//var_dump($data); exit;
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/uploads/product/'.$image_name, $data);
	}
	
	private function event_createJPGFromBase64($data, $image_name){
		//var_dump($data); exit;
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/app_liveads88/uploads/event/'.$image_name, $data);
	}
	
	
	
	
	public function checkout(){
		$data=array();
		$this->load->view('customer_header');				
		$this->load->view('advertise/checkout',$data);
		$this->load->view('footer');
	}
	public function remove($index){
		if ($this->session->userdata('cart')!="") {
			$carts=$this->session->userdata('cart');
			
			array_splice($carts, $index, 1);
			
			$this->session->set_userdata('cart', $carts);
			
            redirect('/advertise/checkout');
        }
        redirect('/advertise');
	}
	
	function paywithpaypal(){
		if ($this->session->userdata('cart')!="") {
			// echo "<pre>";
			// var_dump($this->session->userdata('cart'));
			// echo "</pre>";
			// exit;
			
			$customer_id=$this->session->userdata('cu_id');
			$total=$this->session->userdata('total');
			$carts=$this->session->userdata('cart');
			
			//insert into purchaseads_payment
			//SELECT `payment_id`, `payment_amt`, `customer_id`, `created_at`, `updated_at`, `approved` FROM `purchaseads_payment` WHERE 1			
			$purchaseads_payment = array(
					'payment_amt' => $total,
					'customer_id' => $customer_id
				);
			$this->db->insert('purchaseads_payment', $purchaseads_payment);
			$payment_id=$this->db->insert_id();
			
			foreach($carts as $c){
				$purchaseads_items = array(
						'payment_id' => $payment_id,
						'adscomponent_id' => $c['id'],
						'selectedpriceid' => $c['selectedpriceid'],
						'qty' => $c['qty'],
						'customer_id' => $customer_id
					);
				$this->db->insert('purchaseads_items', $purchaseads_items);
				$item_id=$this->db->insert_id();
				
				foreach($c['data'] as $d){
					$adsname=$c['ads']->adsname;
					$d['payment_id'] = $payment_id;
					$d['purchase_itemid'] = $item_id;
					if($adsname=="Coupons"){
						//insert into coupon
						$this->db->insert('coupon', $d);
					}
					if($adsname=="Promotions"){
						//insert into product
						$this->db->insert('product', $d);
					}
					if($adsname=="Events"){
						//insert into event
						$this->db->insert('event', $d);
					}
					if($adsname=="Jobs"){
						//insert into job
						$this->db->insert('job', $d);
					}
				}
			}
			
			$this->session->set_flashdata('paymentmsg', '<div class="alert alert-success text-center">Your payment is successed.</div>');
			
			$this->session->set_flashdata('success', true);
			
			$data=array();
			$this->load->view('customer_header');				
			$this->load->view('advertise/checkout',$data);
			$this->load->view('footer');
			
		}else{
			redirect('/advertise');
		}
	}
}













