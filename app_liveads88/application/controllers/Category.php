<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * category Module
  *
  * This module is for category function.
  *	@EI EI 
  * @return void
  */
class Category extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about category list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/category/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about brand datatable
    * @Ei
    */
	public function category_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'name',	
			);	
			
		$sql = "SELECT * FROM category WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM category"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {

			$tmpentry = array();
			$tmpentry[] = $row['name'];
			$tmpentry[] = "<img src='".base_url()."uploads/category/".$row['icon_image_name']."' height='100'>";
			$tmpentry[] = $row['order'];
			$tmpentry[] = "<a href='".base_url()."category/update/".$row['id']."' class='btn btn-info'>Edit</a><a href='".base_url()."category/deleteCategory/".$row['id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('order', 'Order', 'trim|required');
			if (empty($_FILES['icon_image']['name']))
				{
					$this->form_validation->set_rules('icon_image', 'Image', 'required');
				}
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/banner/add');
				$this->load->view('admin/footer');
			}else{	
			

				$targetPath = getcwd() . '/uploads/category/';			 
				 $temp = explode(".", $_FILES["icon_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["icon_image"]["tmp_name"], $targetPath.$newfilename1);				 
				 $data_to_store = array(
					'name' 		 => $this->security->xss_clean($this->input->post('name')),
					'order' => $this->security->xss_clean($this->input->post('order')),
					'icon_image_name' => $newfilename1,
				);
				
				
				
				if($this->Category_model->addCategory($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/category/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/category/add');
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
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('order', 'Order', 'trim|required');
	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
														 
				$data_to_store = array(
					'name' 		 => $this->security->xss_clean($this->input->post('name')),
					'order' => $this->security->xss_clean($this->input->post('order')),
				);
				
				if ($_FILES["icon_image"]['size'] >0) {	
				 $targetPath = getcwd() . '/uploads/category/';
				 $temp = explode(".", $_FILES["icon_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["icon_image"]["tmp_name"], $targetPath.$newfilename1);
				 unlink($targetPath.$this->input->post('old_image'));
					$data_to_store['icon_image_name'] 	= 	$newfilename1;			 
				}	
			
				//if the insert has returned true then we show the flash message
				if($this->Category_model->updateCategory($id, $data_to_store) === TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('category/update/'.$id.'');

			}//validation run

		}

		if($data['category'] = $this->Category_model->getCategoryById($id)){	
		
			
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/category/update',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('category');
		}
	}
	
	/**
    * delete banner
    * @Ei
    */
	function deleteCategory()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Category_model->deleteCategory($id);
       
        redirect('category');
    }

}