<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Event Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Referrer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Referrer_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about event list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/referrer/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about event datatable
    * @Ei
    */
	public function referrer_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
					0 =>'signup_date',	
					);	
			
		$sql = "SELECT `user_referrer`.*, u1.user_name as referral_user_name , u2.user_name as referrer_user_name  FROM `user_referrer`
				JOIN user as u1 on `user_referrer`.referral = u1.user_id 
				JOIN user as u2 on `user_referrer`.referrer = u2.user_id
				WHERE 1=1 ";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( u1.user_name LIKE '".$requestData['search']['value']."%' OR  u2.user_name LIKE '".$requestData['search']['value']."%')";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		
		$filter_sql ="SELECT COUNT(`user_referrer`.refer_id) as rowcount FROM `user_referrer`
						JOIN user as u1 on `user_referrer`.referral = u1.user_id 
						JOIN user as u2 on `user_referrer`.referrer = u2.user_id
						WHERE 1=1 ";
		if( !empty($requestData['search']['value']) ) {  
			$filter_sql.=" AND ( u1.user_name LIKE '".$requestData['search']['value']."%' OR  u2.user_name LIKE '".$requestData['search']['value']."%')";    
		}		
		
		$resTotalLength = $this->db->query($filter_sql);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['referral_user_name'];
			$tmpentry[] = $row['referrer_user_name'];
			$tmpentry[] = $row['signup_date'];			
			$tmpentry[] = ($row['gift_sent_status'] == '1' ? 'Yes' : 'No');
			$tmpentry[] = $row['refer_created'];
			$tmpentry[] = "<a href='".base_url()."referrer/update/".$row['refer_id']."' class='btn btn-info'>Edit</a>";			

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
	  * update referrer
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('referrer');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			
	
			$this->form_validation->set_rules('gift_sent_status', ' Gift Send Status', 'trim');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
	 
				 $data_to_store = array(
					'gift_sent_status' => $this->security->xss_clean($this->input->post('gift_sent_status')),
					'gift_sent_date' => $this->security->xss_clean($this->input->post('gift_sent_date')),
					'remark' => $this->security->xss_clean($this->input->post('remark')),
				);
					
				//if the insert has returned true then we show the flash message
				if($this->Referrer_model->updateReferrer($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully Updated</div>');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-error text-center">Updated Fail!</div>');
				}
				redirect('referrer/update/'.$id.'');

			}//validation run

		}

		if($data['referrer'] = $this->Referrer_model->getReferrerById($id)){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/referrer/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('referrer');
		}
		
	}
	
}