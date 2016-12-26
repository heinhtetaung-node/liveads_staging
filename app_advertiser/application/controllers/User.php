<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * User Module
  *
  * This module is for user function.
  *	@EI EI 
  * @return void
  */
class User extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about splash list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * user datatable
    * @Ei
    */
	public function user_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'user_name',
			1 =>'user_email',
			2 =>'user_phone',
			3 =>'user_gender',
			4 =>'user_country',
			5 =>'user_referrer_code',
			6 =>'user_created_date',
			7 =>'user_active',
			8 =>'',	
			);	
			
		$sql = "SELECT
				`user`.user_id,
				`user`.user_email,
				`user`.user_email,
				`user`.user_name,
				`user`.user_created_date,
				`user`.user_last_name,
				`user`.user_gender,
				`user`.user_country,
				`user`.user_referrer_code,
				`user`.user_phone,
				`user`.user_active";
		$sql.=" FROM
				`user`";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `user`.user_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		
		
		$record_count_sql ="SELECT `user`.user_id FROM `user`";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `user`.user_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$record_count_query = $this->db->query($record_count_sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM user"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['user_name'];
			$tmpentry[] = $row['user_email'];					
// 			$tmpentry[] = $row['user_first_name'];
// 			$tmpentry[] = $row['user_last_name'];
			$tmpentry[] = $row['user_phone'];
			$tmpentry[] = $row['user_gender'];
			$tmpentry[] = $row['user_country'];
			$tmpentry[] = $row['user_referrer_code'];
			
			$tmpentry[] = date('Y-m-d', strtotime($row['user_created_date']));
			$tmpentry[] = $row['user_active'];
	
			$tmpentry[] = "<a href='".base_url()."user/detail/".$row['user_id']."' class='btn btn-info'>Detail</a>
						   <a href='".base_url()."user/edit/".$row['user_id']."' class='btn btn-info'>Edit</a>
						  ";			

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
    * Detail
    * @Ei
    */
	public function detail(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('user');
		}
		if($data['user'] = $this->User_model->getUserById($id)){	
		
			
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user/detail',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('user');
		}
	}
	
	
	public function edit(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('user');
		}
		if($data['user'] = $this->User_model->getUserById($id)){	
		
		
		// validators
       // $this->form_validation->set_error_delimiters($this->config->item('error_delimeter_left'), $this->config->item('error_delimeter_right'));
        $this->form_validation->set_rules('user_name', 'User Name', 'required|trim|min_length[5]|max_length[255]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|max_length[255]|valid_email');
		$this->form_validation->set_rules('user_first_name', 'First Name', 'trim|max_length[255]');
		$this->form_validation->set_rules('user_last_name', 'Last Name', 'trim|max_length[255]');
		$this->form_validation->set_rules('user_phone', 'Phone', 'required|trim');
		$this->form_validation->set_rules('user_gender', 'Gender', 'trim');
		$this->form_validation->set_rules('user_country', 'Country', 'required|trim');
		$this->form_validation->set_rules('user_active', 'Status', 'required|trim|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|matches[password_repeat]');
        $this->form_validation->set_rules('password_repeat', 'Confirm Password', 'trim|matches[password]');

        if ($this->form_validation->run() == TRUE)
        {
            // save the changes
            $saved = $this->User_model->edit_user($this->input->post(),$id);

            if ($saved)
            {
                $this->session->set_flashdata('message', 'User data Updated');
            }
            else
            {
                $this->session->set_flashdata('error', 'Cannot update user data' );
            }

            // return to list and display message
            redirect('user/edit/'.$id);
        }

		
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user/edit',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('user');
		}
	}
	
	public function reset_user_password(){
		$return = array('status'=>'fail');
		$user_id  = $this->security->xss_clean($this->input->post('id'));
		if(isset($user_id) && $user_id!="" && is_numeric($user_id) && $user_id > 0){
		
			$user_data = $this->User_model->getUserById($user_id);
			
			if($user_data){
				
				$newPassword = substr(sha1(rand()), 0, 10);
				
				$this->User_model->api_resetPassword( $user_data->user_email, hash('sha256',$newPassword) );
				
				//send email to user
				$subject = 'User Password Reset';		
				$name 	 = "Live Ads 88";
				$message = 'Your password was reset using the email address '.$user_data->user_email.' on ' . date('l jS \of F Y h:i:s A') . '.';				
				$message.= '<br /><br />Your new password is '.$newPassword;				
				$message.= '<br /><br />If you didn\'t do this, please secure your account.';				
				$message.= '<br /><br />Thanks<br />Live Ads 88 Team';				
				$to = $user_data->user_email;
				$from = 'support@liveads88.com';
				$config = $this->config->load('email_config');
	
				$this->load->library('email', $config); 
				$this->email->set_mailtype("html");
				$this->email->from($from, $name);
	
				$this->email->reply_to($from, $name);
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();
				
				
				$return = array('status'=>'success','new_password'=>$newPassword);
				
			}
		}
		
		echo json_encode($return);
	}
}