<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Users extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	
	function index(){
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'user' &&  $this->session->userdata('user_id') > 0 ){
			// authorize
			redirect('home');
		}else{
			redirect('users/login');
		}
		
	}
	
	public function login() {

		$this->load->view('header');
        $this->load->view('user/login');
		$this->load->view('footer');
    }	
	
	function login_validate()
    {
		
        $this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[256]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('user/login');
		}else{
			$email = $this->input->post('email');
			$password = hash('sha256', $this->input->post('password'));
			if($this->User_model->checkUser($email, $password)){
		
				redirect('home');
			}else{
				$this->session->set_flashdata('msg', '<span class="error">Failed Login: Check your username and password!</span>');
				redirect('users/login');
			}
		}
    }
	
	
	public function register() {
        // validators
		$this->form_validation->set_rules('user_name', 'User Name', 'required|trim|max_length[255]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|max_length[255]|valid_email|callback__check_useremail');
		$this->form_validation->set_rules('user_first_name', 'First Name', 'trim|max_length[255]');
		$this->form_validation->set_rules('user_last_name', 'Last Name', 'trim|max_length[255]');
		$this->form_validation->set_rules('user_phone', 'Phone', 'required|trim|callback__check_userphone');
		$this->form_validation->set_rules('user_gender', 'Gender', 'trim');
		$this->form_validation->set_rules('user_country', 'Country', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|matches[password_repeat]');
        $this->form_validation->set_rules('password_repeat', 'Confirm Password', 'trim|matches[password]');

        if ($this->form_validation->run() == TRUE)
        {
			$verification_code = rand(1000, 9999);
			$data = array(
						'user_email' 		=> $this->security->xss_clean($this->input->post('user_email')),
						'user_name' 		=> $this->security->xss_clean($this->input->post('user_name')),
						'user_password' 	=> $this->security->xss_clean($this->input->post('password')),
						'user_first_name' 	=> $this->security->xss_clean($this->input->post('user_first_name')),
						'user_last_name' 	=> $this->security->xss_clean($this->input->post('user_last_name')),
						'user_gender' 		=> $this->security->xss_clean($this->input->post('user_gender')),
						'user_country' 		=> $this->security->xss_clean($this->input->post('user_country')),
						'user_phone' 		=> $this->security->xss_clean($this->input->post('user_phone')),
						'user_verification_code' => $verification_code,
						);
						
						
			//////////////////////////////////
				$data['user_password'] 	= hash('sha256',$data['user_password']);
								
				if($id = $this->User_model->apiRegister($data)){
					
					//the user_country is the country code
					//$sms_result = $this->sendSMSVerificationCode($data['user_country'], $data['user_phone'], 'Verification code for MY LIFE. The verification code is :' . $verification_code);
					$this->session->set_flashdata('message', '<span class="success">User Registration Complete. Please check your Email for verification.</span>');
					redirect('users/verification');
				}else{
					$this->session->set_flashdata('error', '<span class="error">User Registration Fail. Please contact to web administrator!</span>');
					redirect('users/register');
					//register fail
				}			
			//////////////////////////////////			
		}
		$this->load->view('header');
		$this->load->view('user/register');
		$this->load->view('footer');
    }
	
	function verification(){
		
		$this->form_validation->set_rules('user_email', 'Email', 'required|trim|max_length[255]|valid_email');
		$this->form_validation->set_rules('code', 'Verification Code', 'required|trim|max_length[255]');
		 if ($this->form_validation->run() == TRUE)
        {
			$user_email = $this->security->xss_clean($this->input->post('user_email'));
			$code 		= $this->security->xss_clean($this->input->post('code'));
			
			if($this->User_model->checkVerifi($user_email,$code)){
				$this->session->set_flashdata('message', '<span class="success">User Verification Success. You can now login with your account.</span>');
				redirect('users/login');
			}else{
				$this->session->set_flashdata('error', '<span class="success">User Verification Fail!</span>');
				
			}
			
		}
		$this->load->view('header');
		$this->load->view('user/verification');
		$this->load->view('footer');
	}
	
	 function _check_useremail($email)
    {
		if($this->User_model->apiCheckEmailExist($email)){
			$this->form_validation->set_message('_check_useremail', 'Email already exists.');
            return FALSE;
		}
        else
        {
            return $email;
        }
    }
	
	 function _check_userphone($phone)
    {
		if($this->User_model->apiCheckMobileExist($phone)){
			$this->form_validation->set_message('_check_useremail', 'Phone No already exists.');
            return FALSE;
		}
        else
        {
            return $phone;
        }
    }
	
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('users/login');
	}
}