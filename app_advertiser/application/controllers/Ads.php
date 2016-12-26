<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Admin Module
  *
  * This module is for Admin function.
  *	@EI EI 
  * @return void
  */
class Ads extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Advertiser_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	/**
	  * Display dashboard page
	  *
	  */

	public function index($adsname){			
		if($this->session->userdata('isLogin')){
			//echo $adsname;
			if($adsname=="Coupons"){
				$orderkey="cp_id";
				$table="coupon";
				$view="admin/advertiser/coupon_list";
			}
			
			if($adsname=="Promotions"){
				$orderkey="pro_id";
				$table="product";
				$view="admin/advertiser/promotions_list";
			}
			
			if($adsname=="Events"){
				$orderkey="ev_id";
				$table="event";
				$view="admin/advertiser/event_list";
			}
			
			if($adsname=="Jobs"){
				$orderkey="jb_id";
				$table="job";
				$view="admin/advertiser/job_list";
			}
			
			$navidata['navi']=$this->Advertiser_model->getNavi();
			$data['ads']=$this->Advertiser_model->getads($adsname, $table, $orderkey);
		
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar',$navidata);
			$this->load->view($view, $data);
			$this->load->view('admin/footer');
		
		}else{
			redirect('Admin/login');
		}		
	}	
	
	
	
}