<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Customer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	function getCustomer(){
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Customer_model->getCustomer($q);
		}
	}
	
	function getTag(){
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Customer_model->getTag($q);
		}
	}
	
	function initTag(){
		if (isset($_GET['id'])){
		  $q = strtolower($_GET['id']);
		  $this->Customer_model->getTag($q);
		}
	}
	
	public function login() {

		$this->load->view('customer_header');
        $this->load->view('customer/login');
		$this->load->view('footer');
    }	
	
	function login_validate()
    {
		
        $this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[256]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('customer/login');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->Customer_model->CheckCustomer($email, $password,1)){
		
				redirect('advertise');
			}else{
				$this->session->set_flashdata('msg', '<span class="error">Failed Login: Check your username and password!</span>');
				redirect('customer/login');
			}
		}
    }
	
	public function profile(){
		 if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
		 // authorize
		 
			if($data['customer'] = $this->Customer_model->getCustomerDataById($this->session->userdata('cu_id'))){
				$tag = $this->Customer_model->initTag($data['customer']->cu_id);
				//['Hello', 'World', 'Example', 'Tags']
				$data['tag_array_string'] ="";
				$data['tag_comma_string'] ="";
				if(count($tag) >0 ){
					$data['tag_array_string'].= '[';
					for($i=0; $i <count($tag);$i++){
						$data['tag_array_string'].= "'".$tag[$i] ."'," ;
						$data['tag_comma_string'].= $tag[$i] ."," ;
					}
					$data['tag_array_string'] = substr($data['tag_array_string'], 0,-1);
					$data['tag_comma_string'] = substr($data['tag_comma_string'], 0,-1);
					$data['tag_array_string'].= ']';
				}
				$data['category'] = $this->Customer_model->getCategory();
				$data['shopimages'] = $this->Customer_model->getShopImages($this->session->userdata('cu_id'));
					
				$this->load->view('customer_header'); //Edited by Hein Htet Aung header->customer_header
				$this->load->view('customer/profile', $data);
				$this->load->view('footer');
			 }else{
				redirect('customer/login'); 
			 }
		}else{
				redirect('customer/login'); 
			 }
	}
		
	public function logout(){
		$this->session->sess_destroy();
		redirect('customer/login');
	}
}