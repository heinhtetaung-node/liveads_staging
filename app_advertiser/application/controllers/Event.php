<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Event Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Event extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Advertiser_model');
		$this->load->model('Event_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin')){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('ev_title', ' Title', 'trim|required');
			$this->form_validation->set_rules('ev_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('ev_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('ev_date', ' Date', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_rules('ev_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['ev_image_return'] = $this->input->post('ev_image');
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/event/add', $data);
				$this->load->view('admin/footer');
			}else{		
					
				$ev_image="";	
				if($this->input->post('ev_image')){
					$ev_image =  'e_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('ev_image'), $ev_image);
				}
					
				 $data_to_store = array(
					'ev_title' => $this->security->xss_clean($this->input->post('ev_title')),
					'ev_location' => $this->security->xss_clean($this->input->post('ev_location')),
					'ev_description' => $this->security->xss_clean($this->input->post('ev_description')),
					'ev_date' => $this->security->xss_clean($this->input->post('ev_date')),
					'ev_link' => $this->security->xss_clean($this->input->post('ev_link')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'ev_img_name' => $ev_image,
				);
				
				
				if($this->Event_model->addEvent($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('event/add');
			}
			
		}
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/event/add');
			$this->load->view('admin/footer');
		
	}
	
	/**
	  * update event
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('event');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('ev_title', ' Title', 'trim|required');
			$this->form_validation->set_rules('ev_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('ev_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('ev_date', ' Date', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run()==true)
			{    
							 
				 $data_to_store = array(
					'ev_title' => $this->security->xss_clean($this->input->post('ev_title')),
					'ev_location' => $this->security->xss_clean($this->input->post('ev_location')),
					'ev_description' => $this->security->xss_clean($this->input->post('ev_description')),
					'ev_date' => $this->security->xss_clean($this->input->post('ev_date')),
					'ev_link' => $this->security->xss_clean($this->input->post('ev_link')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'ev_status' => $this->input->post('ev_status'),
					'livestatus' => $this->input->post('livestatus')
				);
				
				
				$ev_image="";	
				if($this->input->post('ev_image') && $this->input->post('ev_image')!=""){
					$ev_image =  'e_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('ev_image'), $ev_image);
					$data_to_store['ev_img_name'] = $ev_image;
					
					$base=getcwd();
					$base=str_replace('app_advertiser', 'app_liveads88', $base);
					
					//remove old file
					 $targetPath = $base . '/uploads/event/';
					 if(file_exists($targetPath.$this->input->post('old_image'))){
							unlink($targetPath.$this->input->post('old_image'));
					 }
				}
				
				
				//if the insert has returned true then we show the flash message
				if($this->Event_model->updateEvent($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('event/update/'.$id.'');
			//validation run
			}else{
				$data['ev_image_return'] = $this->input->post('ev_image');
			}

		}

		if($data['event'] = $this->Event_model->getEventById($id)){
			$this->load->view('admin/header');
			$navidata['navi']=$this->Advertiser_model->getNavi();
			$this->load->view('admin/sidebar', $navidata);
			$this->load->view('admin/event/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('event');
		}
		//print_r($data);
		//load the view
		
	}
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);
		
		$base=getcwd();
		$base=str_replace('app_advertiser', 'app_liveads88', $base);
		
		file_put_contents($base . '/uploads/event/'.$image_name, $data);
	}
	
	/**
    * delete event
    * @Ei
    */
	function deleteEvent()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Event_model->deleteEvent($id);
       
        redirect('event');
    }
}