<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Brand Module
  *
  * This module is for Brand function.
  *	@EI EI 
  * @return void
  */
class Brand extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Brand_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		exit;
	}
	
	 /**
    * Add about brand list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/brand/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about brand datatable
    * @Ei
    */
	public function banner_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'brand_name',	
			);	
			
		$sql = "SELECT * FROM brand WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( brand_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM brand"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$ext = substr(strrchr($row['brand_image_name'],'.'),1);
					$src = 'data: image/'.$ext.';base64,'.$row['brand_image'];
			$tmpentry = array();
			$tmpentry[] = $row['brand_name'];
			$tmpentry[] = "<img src='".$src."' width='100' height='100'>";
			$tmpentry[] = $row['banner_link'];			
			$tmpentry[] = $row['banner_type'];
			$tmpentry[] = "<a href='".base_url()."brand/update/".$row['brand_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."brand/deleteBrand/".$row['brand_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
	  *  add banner
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('brand_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('brand_link', 'Link', 'trim|required');
			$this->form_validation->set_rules('banner_type', ' Type', 'trim|required');	
			if (empty($_FILES['banner_image']['name']))
				{
					$this->form_validation->set_rules('banner_image', 'Image', 'required');
				}
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/banner/add');
				$this->load->view('admin/footer');
			}else{	
				 $targetPath = getcwd() . '/uploads/banner/';
				 move_uploaded_file($_FILES["banner_image"]["tmp_name"], $targetPath.$_FILES["banner_image"]["name"]);	
				 $bin_string = file_get_contents($targetPath.$_FILES["banner_image"]["name"]);
				 $hex_string = base64_encode($bin_string);	
				 unlink($targetPath.$_FILES["banner_image"]["name"]);		
				 $data_to_store = array(
					'banner_name' 		 => $this->security->xss_clean($this->input->post('banner_name')),
					'banner_type' => $this->security->xss_clean($this->input->post('banner_type')),
					'banner_link' => $this->security->xss_clean($this->input->post('banner_link')),
					'banner_image' => $hex_string,
					'banner_image_name' => $_FILES["banner_image"]["name"],
				);
				if($this->Banner_model->addBanner($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/banner/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/banner/add');
			$this->load->view('admin/footer');
		}
	}
	
	
	
	/**
	  * update banner
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('banner');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('banner_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('banner_link', 'Link', 'trim|required');
			$this->form_validation->set_rules('banner_type', ' Type', 'trim|required');	
	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
				$hex_string ="";
				if ($_FILES["banner_image"]['size'] >0) {	
				 $targetPath = getcwd() . '/uploads/banner/';
				 move_uploaded_file($_FILES["banner_image"]["tmp_name"], $targetPath.$_FILES["banner_image"]["name"]);	
				 $bin_string = file_get_contents($targetPath.$_FILES["banner_image"]["name"]);
				 $hex_string = base64_encode($bin_string);		
				 unlink($targetPath.$_FILES["banner_image"]["name"]);		 
				}
							 
				$data_to_store = array(
					'banner_name' 		 => $this->security->xss_clean($this->input->post('banner_name')),
					'banner_type' => $this->security->xss_clean($this->input->post('banner_type')),
					'banner_link' => $this->security->xss_clean($this->input->post('banner_link')),
				);
				
				if( $hex_string!=""){
					$data_to_store['banner_image'] = $hex_string;
					
					$file_name 						= preg_replace("/[^a-zA-Z0-9.]/", "", $_FILES["banner_image"]["name"]);
					$data_to_store['banner_image_name'] 	= (strlen($file_name) > 200 ? substr($file_name, 0, 200) : $file_name);
				}
				
			
				//if the insert has returned true then we show the flash message
				if($this->Banner_model->updateBanner($id, $data_to_store) === TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('banner/update/'.$id.'');

			}//validation run

		}

		if($data['banner'] = $this->Banner_model->getBannerById($id)){	
		
			
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/banner/update',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('banner');
		}
	}
	
	/**
    * delete banner
    * @Ei
    */
	function deleteBanner()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Banner_model->deleteBanner($id);
       
        redirect('banner');
    }

}