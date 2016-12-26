<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Splash Module
  *
  * This module is for Splash function.
  *	@EI EI 
  * @return void
  */
class Splash extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Splash_model');
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
		$this->load->view('admin/splash/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about splash datatable
    * @Ei
    */
	public function splash_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'spimg_name',	
			);	
			
		$sql = "SELECT
				splash_image.spimg_name,
				splash_image.spimg_image_name,
				splash_image.spimg_website,
				splash_image.spimg_name,
				splash_image.spimg_id,
				splash_image.spimg_status";
		$sql.=" FROM
				`splash_image` WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `splash_image`.spimg_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM splash_image"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			
			$tmpentry = array();
			$tmpentry[] = $row['spimg_name'];
			$tmpentry[] = "<img src='".base_url()."uploads/splash/".$row['spimg_image_name']."' height='100'>";
			$tmpentry[] = $row['spimg_website'];			
			$tmpentry[] = $row['spimg_status'];
			$tmpentry[] = "<a href='".base_url()."splash/update/".$row['spimg_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."splash/deleteSplash/".$row['spimg_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/uploads/splash/'.$image_name, $data);
	}
	/**
	  *  add splash
	  *
	*/
	public function add()
	{
		$data = array();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('sp_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('sp_website', 'Link', 'trim');
			$this->form_validation->set_rules('sp_email', 'Email', 'trim|valid_email');	
			$this->form_validation->set_rules('customer_id', 'Customer', 'trim');	
			$this->form_validation->set_rules('sp_status', ' Status', 'trim|numeric');	
			
			$this->form_validation->set_rules('sp_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['sp_image_return'] = $this->input->post('sp_image');
			}else{	
			
				$sp_image="";	
				if($this->input->post('sp_image')){
					$sp_image =  'sp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('sp_image'), $sp_image);
				}	
				 
				 $data_to_store = array(
					'spimg_name' 		=> $this->security->xss_clean($this->input->post('sp_name')),
					'spimg_status' 		=> $this->security->xss_clean($this->input->post('sp_status')),
					'spimg_linkto' 		=> $this->security->xss_clean($this->input->post('spimg_linkto')),
					'spimg_customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'spimg_email' 		=> $this->security->xss_clean($this->input->post('sp_email')),
					'spimg_website' 	=> $this->security->xss_clean($this->input->post('sp_website')),
					'spimg_image_base64'=> '',
					'spimg_image_name' 	=> $sp_image,
				);
				if($this->Splash_model->addSplash($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('splash/add');
			}
			
		}
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/splash/add', $data);
			$this->load->view('admin/footer');
		
	}
	
	/**
	  * update splash
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('splash');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('sp_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('sp_website', 'Link', 'trim');
			$this->form_validation->set_rules('sp_email', 'Email', 'trim|valid_email');	
			$this->form_validation->set_rules('customer_id', 'Customer', 'trim');	
			$this->form_validation->set_rules('sp_status', ' Status', 'trim|numeric');	
	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run()==TRUE)
			{    
				
							 
				$data_to_store = array(
					'spimg_name' 		 => $this->security->xss_clean($this->input->post('sp_name')),
					'spimg_linkto' 		 => $this->security->xss_clean($this->input->post('spimg_linkto')),
					'spimg_status' => $this->security->xss_clean($this->input->post('sp_status')),
					'spimg_customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'spimg_email' 		=> $this->security->xss_clean($this->input->post('sp_email')),
					'spimg_website' => $this->security->xss_clean($this->input->post('sp_website')),
				);
				
				$sp_image="";	
				if($this->input->post('sp_image') && $this->input->post('sp_image')!=""){
					$sp_image =  'sp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('sp_image'), $sp_image);
					$data_to_store['spimg_image_name'] = $sp_image;
					
					//remove old file
					 $targetPath = getcwd() . '/uploads/splash/';
					 if(file_exists($targetPath.$this->input->post('old_image'))){
							unlink($targetPath.$this->input->post('old_image'));
					 }
				}
				
				//if the insert has returned true then we show the flash message
				if($this->Splash_model->updateSplash($id, $data_to_store) === TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('splash/update/'.$id.'');
			//validation run
			}else{
				$data['sp_image_return'] = $this->input->post('sp_image');
			}

		}

		if($data['splash'] = $this->Splash_model->getSplashById($id)){	
		
			
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/splash/update',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('splash');
		}
	}
	
	
	/**
    * delete splash
    * @Ei
    */
	function deleteSplash()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Splash_model->deleteSplash($id);
       
        redirect('splash');
    }
}