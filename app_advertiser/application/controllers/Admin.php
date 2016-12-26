<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Admin Module
  *
  * This module is for Admin function.
  *	@EI EI 
  * @return void
  */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Advertiser_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	/**
	  * Display dashboard page
	  *
	  */

	public function index(){		
		if($this->session->userdata('isLogin')){
			// authorize
			redirect('Admin/dashboard');
		}else{
			redirect('Admin/login');
		}		
	}	
	
	/**
	* admin login
	**/
	public function login() {

        $this->load->view('admin/login');
    }	
	
	/**
	* admin login validation
	**/
	function login_validate()
    {
		
        $this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[256]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/login');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//echo $password; exit;
			if($this->Admin_model->CheckUser($email, $password,1)){		
				redirect('admin/index');
			}else{
				$this->session->set_flashdata('msg', '<span class="error">Failed Login: Check your username and password!</span>');
				redirect('admin/login');
			}
		}
    }
	
	/**
	* admin dashboard
	**/
	function dashboard(){
		
		
		if($this->session->userdata('isLogin')){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
		$data['navi']=$this->Advertiser_model->getNavi();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}
	function select_validate($abcd)
	{
		if($abcd=="none"){
		$this->form_validation->set_message('select_validate', 'Please Select Category.');
		return false;
		} else{
		return true;
		}
	}
	
	function inquiry(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/inquiry/list');
		$this->load->view('admin/footer');
	}
	
	 /**
    * Add about inquiry datatable
    * @Ei
    */
	public function inquiry_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'inq_created',	
			);	
			
		$sql = "SELECT
				inquiry.user_id,
				inquiry.inq_name,
				inquiry.inq_message"
;
		$sql.=" FROM
				`inquiry`";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `inquiry`.inq_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM inquiry"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = "<a href='".base_url()."user/detail/".$row['user_id']."' >".$row['inq_name']."</a>";
			$tmpentry[] = $row['inq_message'];			
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
	
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	
}