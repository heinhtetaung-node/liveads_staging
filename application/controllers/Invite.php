<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Invite extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Job_model');
		$this->load->library(array('session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	function index() {
	
	}
	
	function referrer() {
		log_message('error', 'invite:'.$this->uri->segment(2));
		$data['code'] = $this->uri->segment(2);
		$this->load->view('invite/referrerView', $data);
		
		
	}
}