<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Coupon Module
  *
  * This module is for Coupon function.
  *	@EI EI 
  * @return void
  */
class Coupon extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Advertiser_model');
		$this->load->model('Coupon_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin')){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);
		$base=getcwd();
		$base=str_replace('app_advertiser', 'app_liveads88', $base);
		file_put_contents($base . '/uploads/coupon/'.$image_name, $data);
	}
	/**
	  *  add coupon
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('cp_name', ' Coupon Name', 'trim|required');
			$this->form_validation->set_rules('cp_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('cp_quantity', ' Quantity', 'trim|numeric');	
			$this->form_validation->set_rules('cp_code', ' Code', 'trim');	
			$this->form_validation->set_rules('cp_valid_from', ' Valid From', 'trim');	
			$this->form_validation->set_rules('cp_valid_to', ' Valid To', 'trim');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_rules('cp_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['cp_image_return'] = $this->input->post('cp_image');
				$data['cp_type_return']  = $this->input->post('cp_type');
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/coupon/add', $data);
				$this->load->view('admin/footer');
			}else{	
				
				$cp_image="";	
				if($this->input->post('cp_image')){
					$cp_image =  'cp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('cp_image'), $cp_image);
				}
								 
				 $data_to_store = array(
					'cp_name' 		 => $this->security->xss_clean($this->input->post('cp_name')),
					'cp_description' => $this->security->xss_clean($this->input->post('cp_description')),
					'customer_id' 	 => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'cp_img_name' => $cp_image,
					'cp_surprise_marked' => $this->security->xss_clean($this->input->post('cp_surprise_marked')),
				);
				
				if($this->input->post('cp_type')=='date'){
					$data_to_store['cp_type'] 		= 'date';
					$data_to_store['cp_quantity'] 	= '';
					$data_to_store['cp_code'] 		= '';
					$data_to_store['cp_valid_from'] = $this->security->xss_clean($this->input->post('cp_valid_from'));
					$data_to_store['cp_valid_to']	= $this->security->xss_clean($this->input->post('cp_valid_to'));
				}else{
					$data_to_store['cp_type'] 		= 'quantity';
					$data_to_store['cp_quantity'] 	= $this->security->xss_clean($this->input->post('cp_quantity'));
					$data_to_store['cp_code'] 		= $this->security->xss_clean($this->input->post('cp_code'));
					$data_to_store['cp_valid_from'] = '';
					$data_to_store['cp_valid_to'] 	= '';
				}
				
				if($this->Coupon_model->addCoupon($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('coupon/add');
			}
			
		}else{
			
			$data['cp_type_return']  = 'date';
			
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$string = '';
			 for ($i = 0; $i < 8; $i++) {
				  $string .= $characters[rand(0, strlen($characters) - 1)];
			 }
			$data['coupon_code'] = $string;
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/coupon/add', $data);
			$this->load->view('admin/footer');
		}
	}
	
	/**
	  * update coupon
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('coupon');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			//echo $this->input->post('livestatus'); exit;
			$this->form_validation->set_rules('cp_name', ' Coupon Name', 'trim|required');
			$this->form_validation->set_rules('cp_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('cp_quantity', ' Quantity', 'numeric');	
			$this->form_validation->set_rules('cp_code', ' Code', 'trim');	
			$this->form_validation->set_rules('cp_valid_from', ' Valid From', 'trim');	
			//$this->form_validation->set_rules('cp_valid_to', ' Valid To', 'trim');	
			//$this->form_validation->set_rules('paid_ads_start_date', ' Feature Date From', 'trim');	
			//$this->form_validation->set_rules('paid_ads_end_date', ' Feature Date To', 'trim');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run()==true)
			{    
				
				
							 
				$data_to_store = array(
					'cp_name' 		 => $this->security->xss_clean($this->input->post('cp_name')),
					'cp_description' => $this->security->xss_clean($this->input->post('cp_description')),
					'customer_id' 	 => $this->security->xss_clean($this->input->post('customer_id')),
					'cp_status' 	 => $this->security->xss_clean($this->input->post('cp_status')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'cp_surprise_marked' => $this->security->xss_clean($this->input->post('cp_surprise_marked')),
					'livestatus' => $this->input->post('livestatus')
				);
				
				if($this->input->post('cp_type')=='date'){
					$data_to_store['cp_type'] 		= 'date';
					$data_to_store['cp_quantity'] 	= '';
					$data_to_store['cp_code'] 		= '';
					$data_to_store['cp_valid_from'] = $this->security->xss_clean($this->input->post('cp_valid_from'));
					$data_to_store['cp_valid_to']	= $this->security->xss_clean($this->input->post('cp_valid_to'));
				}else{
					$data_to_store['cp_type'] 		= 'quantity';
					$data_to_store['cp_quantity'] 	= $this->security->xss_clean($this->input->post('cp_quantity'));
					$data_to_store['cp_code'] 		= $this->security->xss_clean($this->input->post('cp_code'));
					$data_to_store['cp_valid_from'] = '';
					$data_to_store['cp_valid_to'] 	= '';
				}
				
				
				$cp_image="";	
				if($this->input->post('cp_image') && $this->input->post('cp_image')!=""){
					$cp_image =  'cp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('cp_image'), $cp_image);
					$data_to_store['cp_img_name'] = $cp_image;
					$base=getcwd();
					$base=str_replace('app_advertiser', 'app_liveads88', $base);
					//remove old file
					//echo getcwd(); echo "<br>"; echo $base; exit;
					 $targetPath = $base . '/uploads/coupon/';
					 if(file_exists($targetPath.$this->input->post('old_image'))){
							unlink($targetPath.$this->input->post('old_image'));
					 }
				}
				
				//if the insert has returned true then we show the flash message
				if($this->Coupon_model->updateCoupon($id, $data_to_store) === TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('coupon/update/'.$id.'');
			//validation run
			}else{
				$data['cp_image_return'] = $this->input->post('cp_image');
				$data['cp_type_return'] = $this->input->post('cp_type');
			}

		}

		if($data['coupon'] = $this->Coupon_model->getcouponById($id)){
			
			if($data['coupon']->cp_type == 'quantity'){
				$data['cp_type_return'] = 'quantity';
			}else{
				$data['cp_type_return'] = 'date';
			}
			
			
		
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$string = '';
			 for ($i = 0; $i < 8; $i++) {
				  $string .= $characters[rand(0, strlen($characters) - 1)];
			 }
			$data['coupon_code'] = $string;		
			
		//load the view
		$this->load->view('admin/header');
		$navidata['navi']=$this->Advertiser_model->getNavi();
		$this->load->view('admin/sidebar', $navidata);
		$this->load->view('admin/coupon/update',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('admin');
		}
	}
	
	
	
}