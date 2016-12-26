<?php

use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\Sale;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConnectionException;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Api\PaymentExecution;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;


require "vendor/autoload.php";


class PaypalPayment {
	
	protected $api;
	
	function __construct() {
		$this->api = new ApiContext(
			new OAuthTokenCredential(
				'AfBCnLyoqcugGBzOXGySyvMdswtOUKqV-Y2c5TJ88ZxhB4uhfFGCarV9AYQTAENaQRyd_brceWn4jbk1',
				'ENFuidxiNEUdpkKEtekHMXfivtzT2Ox59rJ5vFICCmDwqvOIjx3XMt-tBZZxDnYorpcL0QUzWyGp7FeA'
			)
		);

		$this->api->setConfig([
			'mode' => 'sandbox',
			'http.ConnectionTimeOut' => 30,
			'log.logEnabled' => false,
			'log.FileName' => '',
			'log.logLevel' => 'FINE',
			'validation.level' => 'log'
		]);
	}	
	
	function makepayment($shipping, $subtotal, $tax, $currency, $description, $intent, $returnurl, $cancelurl, $errorurl){
		
		$payer = new Payer();
		$details = new Details();
		$amount = new Amount();
		$transaction = new Transaction();
		$payment = new Payment();
		$redirectUrls = new RedirectUrls();

		// Payer
		$payer->setPaymentMethod('paypal');

		// Details
		$details->setShipping($shipping)
			->setTax($tax)
			->setSubtotal($subtotal);
			
		// Amount
		$amount->setCurrency($currency)
			->setTotal($shipping+$tax+$subtotal)
			->setDetails($details);
			
		// Transaction
		$transaction->setAmount($amount)
			->setDescription($description)
			->setInvoiceNumber(uniqid());
			
		$payment->setIntent($intent)
			->setPayer($payer)
			->setTransactions([$transaction]);
			
		$redirectUrls->setReturnUrl($returnurl)
			->setCancelUrl($cancelurl);
			
		$payment->setRedirectUrls($redirectUrls);
		
		try{			
			$payment->create($this->api);
			
			$_SESSION['payment_id']=$payment->getId(); 
			
		} catch (PayPalConnectionException $e) {
			header('Location: '.$errorurl);
		}

		foreach($payment->getLinks() as $link){
			if($link->getRel() == 'approval_url'){
				$redirectUrl = $link->getHref();
			}
		}

		header('Location: '.$redirectUrl);
	}
	
	function chargeuser($paymentId, $payerId){
		
		$payment = Payment::get($paymentId, $this->api);
		$execution = new PaymentExecution();
		$execution->setPayerId($payerId);
		
		$res=$payment->execute($execution, $this->api);
		
		$transaction=$payment->getTransactions();
		$related_resources = $transaction[0]->getRelatedResources();
		$sale = $related_resources[0]->getSale();
		$sale_id=$sale->getId();
		
		try{
			
			$sale=Sale::get($sale_id, $this->api);
			$invoice_number=$sale->invoice_number;
			$_SESSION['invoice_number']=$invoice_number;
			
		}catch(Exception $ex){
			
		}
		
	}
	
}

