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
			redirect("advertise/register"); //Edited by Hein Htet Aung from redirect("advertise/signup");
		}
		
	}
	
	function shop(){
		// a new ads component shopping page
		$data['ads'] = $this->Adscomponent_Model->getAllAdsComponent();
		$this->load->view('customer_header');				
		$this->load->view('advertise/shop',$data);
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
	
}