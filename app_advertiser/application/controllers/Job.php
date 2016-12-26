<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Job Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Job extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Advertiser_model');
		$this->load->model('Job_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin')){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	/**
	  *  add event
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('jb_name', ' Title', 'trim|required');
			$this->form_validation->set_rules('jb_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('jb_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('jb_expired', ' Date', 'trim|required');	
			$this->form_validation->set_rules('jb_email', ' Email', 'trim|valid_email|required');	
			$this->form_validation->set_rules('jb_phone', ' Phone', 'trim|required');	
			$this->form_validation->set_rules('jb_salary', ' Salary', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/job/add');
				$this->load->view('admin/footer');
			}else{		
						 
				 $data_to_store = array(
					'jb_name' => $this->security->xss_clean($this->input->post('jb_name')),
					'jb_location' => $this->security->xss_clean($this->input->post('jb_location')),
					'jb_description' => $this->security->xss_clean($this->input->post('jb_description')),
					'jb_email' => $this->security->xss_clean($this->input->post('jb_email')),
					'jb_phone' => $this->security->xss_clean($this->input->post('jb_phone')),
					'jb_expired' => $this->security->xss_clean($this->input->post('jb_expired')),
					'jb_salary' => $this->security->xss_clean($this->input->post('jb_salary')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'livestatus' => $this->input->post('livestatus')
				);
				if($this->Job_model->addJob($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/job/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/job/add');
			$this->load->view('admin/footer');
		}
	}
	
	
	/**
	  * update job
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('job');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('jb_name', ' Title', 'trim|required');
			$this->form_validation->set_rules('jb_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('jb_email', ' Email', 'trim|valid_email|required');	
			$this->form_validation->set_rules('jb_phone', ' Phone', 'trim|required');	
			$this->form_validation->set_rules('jb_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('jb_expired', ' Date', 'trim|required');	
			$this->form_validation->set_rules('jb_salary', ' Salary', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
						 
				 $data_to_store = array(
					'jb_name' => $this->security->xss_clean($this->input->post('jb_name')),
					'jb_location' => $this->security->xss_clean($this->input->post('jb_location')),
					'jb_description' => $this->security->xss_clean($this->input->post('jb_description')),
					'jb_expired' => $this->security->xss_clean($this->input->post('jb_expired')),
					'jb_email' => $this->security->xss_clean($this->input->post('jb_email')),
					'jb_phone' => $this->security->xss_clean($this->input->post('jb_phone')),
					'jb_salary' => $this->security->xss_clean($this->input->post('jb_salary')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'jb_status' => $this->security->xss_clean($this->input->post('jb_status')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'livestatus' => $this->input->post('livestatus')
				);
				//if the insert has returned true then we show the flash message
				if($this->Job_model->updateJob($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('job/update/'.$id.'');

			}//validation run

		}

		if($data['job'] = $this->Job_model->getJobById($id)){
			$this->load->view('admin/header');
			$navidata['navi']=$this->Advertiser_model->getNavi();
			$this->load->view('admin/sidebar', $navidata);
			$this->load->view('admin/job/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect("job");
		}
		//print_r($data);
		//load the view
		
	}
	
	
	/**
    * delete event
    * @Ei
    */
	function deleteJob()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Job_model->deleteJob($id);       
        redirect('job');
    }
	
}