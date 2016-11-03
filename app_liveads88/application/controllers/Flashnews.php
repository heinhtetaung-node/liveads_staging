<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Flashnews Module
  *
  * This module is for flashnew function.
  *	@EI EI 
  * @return void
  */
class Flashnews extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Flashnews_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add  flashnews list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flashnews/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about flashnews datatable
    * @Ei
    */
	public function flashnews_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'fn_text',	
			);	
			
		$sql = "SELECT
				flash_news.fn_id,
				flash_news.fn_text,
				flash_news.fn_expired
				";
		$sql.=" FROM
				`flash_news` WHERE 1=1
				";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( flash_news.fn_text LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM flash_news"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['fn_text'];
			$tmpentry[] = $row['fn_expired'];
			$tmpentry[] = "<a href='".base_url()."flashnews/update/".$row['fn_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."flashnews/deleteFlash/".$row['fn_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
			$this->form_validation->set_rules('fn_text', ' Text', 'trim|required');
			$this->form_validation->set_rules('fn_expired', ' Expired', 'trim|required');	

			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flashnews/add');
				$this->load->view('admin/footer');
			}else{		
						 
				 $data_to_store = array(
					'fn_text' => $this->security->xss_clean($this->input->post('fn_text')),
					'fn_expired' => $this->security->xss_clean($this->input->post('fn_expired')),
		
				);
				if($this->Flashnews_model->addFlashnews($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flashnews/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flashnews/add');
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
			redirect('flashnews');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('fn_text', ' Text', 'trim|required');
			$this->form_validation->set_rules('fn_expired', ' Expired', 'trim|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
						 
				 $data_to_store = array(
					'fn_text' => $this->security->xss_clean($this->input->post('fn_text')),
					'fn_expired' => $this->security->xss_clean($this->input->post('fn_expired')),
		
				);
				//if the insert has returned true then we show the flash message
				if($this->Flashnews_model->updateFlashnews($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('flashnews/update/'.$id.'');

			}//validation run

		}

		if($data['flashnews'] = $this->Flashnews_model->getFlashnewsById($id)){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flashnews/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('flashnews');
		}
		//print_r($data);
		//load the view
		
	}
	
	
	/**
    * delete event
    * @Ei
    */
	function deleteFlash()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Flashnews_model->deleteFlash($id);       
        redirect('flashnews');
    }
	
}