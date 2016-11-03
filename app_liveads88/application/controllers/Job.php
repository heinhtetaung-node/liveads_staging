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
		$this->load->model('Job_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about job list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/job/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about job datatable
    * @Ei
    */
	public function job_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'jb_created',	
			);	
			
		$sql = "SELECT customer.cu_name,
				`job`.jb_id,
				`job`.customer_id,
				`job`.jb_name,
				`job`.jb_description,
				`job`.jb_salary,
				`job`.jb_location,
				`job`.jb_expired
				";
		$sql.=" FROM
				`job`
				INNER JOIN customer ON `job`.customer_id = customer.cu_id WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( jb_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM job"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['jb_name'];
			$tmpentry[] = $row['cu_name'];
			$tmpentry[] = $row['jb_salary'];			
			$tmpentry[] = $row['jb_location'];
			$tmpentry[] = $row['jb_description'];
			$tmpentry[] = "<a href='".base_url()."job/update/".$row['jb_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."job/deleteJob/".$row['jb_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

			$result_array[] = $tmpentry;
		}
		
		/*
		 * Output
		 */
		$output = array(
			"draw"            => intval( $_GET['draw'] ),
			"recordsTotal"    => intval( $recordsTotal ),
			"recordsFiltered" => intval( $recordsFiltered ),
			"data"            => ($result_array)
		);
		print_r(json_encode($output));
		exit();
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
			$this->load->view('admin/sidebar');
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