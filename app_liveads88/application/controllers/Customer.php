<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Customer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	
	function index(){
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/customer/list');
		$this->load->view('admin/footer');
	}
	
	function getCustomer(){
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Customer_model->getCustomer($q);
		}
	}
	
	function getTag(){
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Customer_model->getTag($q);
		}
	}
	
	function initTag(){
		if (isset($_GET['id'])){
		  $q = strtolower($_GET['id']);
		  $this->Customer_model->getTag($q);
		}
	}
	
	 /**
    * Add about customer datatable
    * @Ei
    */
	public function customer_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'cu_name',	
			);	
			
		$sql = "SELECT * ";
		$sql.=" FROM customer WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( cu_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		
		//echo $recordsFiltered;
		$rowCountSql = "SELECT COUNT(*) as rowcount FROM customer";
		if( !empty($requestData['search']['value']) ) {  
			$rowCountSql.=" AND ( cu_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$resTotalLength = $this->db->query($rowCountSql);
		
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal; 
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['cu_name'];
			$tmpentry[] = $row['cu_email'];
			$tmpentry[] = $row['cu_mobile'];			
			$tmpentry[] = $row['cu_lat'];
			$tmpentry[] = $row['cu_long'];
			$tmpentry[] = ($row['cu_status']==1) ? "active" : "inactive";
			$tmpentry[] = "<a href='".base_url()."customer/update/".$row['cu_id']."' class='btn btn-info'>Edit</a>
						   <a href='".base_url()."customer/deleteCustomer/".$row['cu_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
						   <a href='".base_url()."customer/shop_album/".$row['cu_id']."' class='btn btn-primary'>Add/ Update Album</a>
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
	
	
	
	private function createJPGFromBase64Images($data, $url_image_data){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() .'/'. $url_image_data, $data);
	}
	
	function removeShopAlbumImage(){
		
		$sa_id 	= $this->security->xss_clean($this->input->post('sa_id'));
		$cu_id 	= $this->security->xss_clean($this->input->post('cu_id'));
		
		$return = array('status'=>'fail');
		
		if(is_numeric($sa_id) && $sa_id > 0 && is_numeric($cu_id) && $cu_id > 0 ){
			if($album_image_name = $this->Customer_model->getShopAlbumImageNameByIDs($cu_id, $sa_id)){
				//remove from db
				$this->Customer_model->deleteShopAlbumImageNameByIDs($cu_id, $sa_id);
			
				//remove file from server
				if(file_exists(getcwd() .'/'. $album_image_name)){
					unlink(getcwd() .'/'. $album_image_name);
				}
				
				$return = array('status'=>'success', 'sa_id'=>$sa_id, 'cu_id'=>$cu_id);
			}
		}
		
		echo json_encode($return);
	}
	
	public function shop_album(){
		$cu_id = $this->uri->segment(3);
		if(!is_numeric($cu_id)){
			redirect('customer');
		}

		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
		
				$id =  $this->security->xss_clean($this->input->post('customer_id'));	
					
				///////////////////////////////////////////////
				$album_images_array = $this->input->post('data_album_image');
				$image_sort_order_array = $this->input->post('server_shop_image_sort_order');
				if(count($album_images_array) > 0){
					$album_images = array();
					
					//check folder not exists, create folder
					//if exists, remove all file as it is add method
					$album_image_path = getcwd() . '/uploads/shop_album/'.$id;
					if (!file_exists($album_image_path)) {
						mkdir($album_image_path, 0777, true);
					}
					
					for($i=0; $i < count($album_images_array); $i++){
						$album_images[$i]['cu_id'] 	=  $id;
						$album_images[$i]['sort_order'] = $image_sort_order_array[$i] ;
						$album_images[$i]['sa_name'] =  'uploads/shop_album/' . $id . '/' . round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Images($album_images_array[$i], $album_images[$i]['sa_name']);
					}
					
					$this->Customer_model->insertShopAlbumImageBatchArray($album_images);
				}
				
				///////////////////////////////////////////////

				$this->session->set_flashdata('flash_message', 'updated');
				redirect('customer/shop_album/'.$id);

			}//validation run

		}
		
		$data['album_images']= $this->Customer_model->getShopAlbumImagesByCustomerID($cu_id);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/customer/manage_album', $data);
		$this->load->view('admin/footer');	
		
	}
	
	
	public function login() {

        $this->load->view('admin/customer/login');
    }	
	
	function login_validate()
    {
		
        $this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[256]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/customer/login');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->Customer_model->CheckCustomer($email, $password,1)){
		
				redirect('customer/profile');
			}else{
				$this->session->set_flashdata('msg', '<span class="error">Failed Login: Check your username and password!</span>');
				redirect('customer/login');
			}
		}
    }
	
	public function profile(){
		 if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
		 // authorize
		 
			if($data['customer'] = $this->Customer_model->getCustomerDataById($this->session->userdata('cu_id'))){
				$tag = $this->Customer_model->initTag($data['customer']->cu_id);
				//['Hello', 'World', 'Example', 'Tags']
				$data['tag_array_string'] ="";
				$data['tag_comma_string'] ="";
				if(count($tag) >0 ){
					$data['tag_array_string'].= '[';
					for($i=0; $i <count($tag);$i++){
						$data['tag_array_string'].= "'".$tag[$i] ."'," ;
						$data['tag_comma_string'].= $tag[$i] ."," ;
					}
					$data['tag_array_string'] = substr($data['tag_array_string'], 0,-1);
					$data['tag_comma_string'] = substr($data['tag_comma_string'], 0,-1);
					$data['tag_array_string'].= ']';
				}
				$data['category'] = $this->Customer_model->getCategory();
				$data['shopimages'] = $this->Customer_model->getShopImages($this->session->userdata('cu_id'));
					
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/customer/profile', $data);
				$this->load->view('admin/footer');
			 }else{
				redirect('customer/login'); 
			 }
		}else{
				redirect('customer/login'); 
			 }
	}
	
	
	/**
	  *  add customer
	  *
	*/
	public function add_backup_old_one()
	{ exit;
		
		$data['category'] = $this->Customer_model->getCategory();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			 //form validation	
			 
			$this->form_validation->set_rules('cu_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('cu_email', ' Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('cu_mobile', ' Mobile', 'trim|required');
			$this->form_validation->set_rules('cu_address', 'Address', 'trim|required');
			//$this->form_validation->set_rules('cu_postal', 'Postal code', 'trim|required');
			$this->form_validation->set_rules('cu_description', 'Description', 'trim|required');
			$this->form_validation->set_rules('cu_service_type', 'Service Type', 'trim|required');
			$this->form_validation->set_rules('cu_tag', 'Tag', 'trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');
			
			$this->form_validation->set_rules('cu_password', 'Password', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('cu_password_confirm', 'Confirm Password', 'required|trim|matches[cu_password]');
			
			$this->form_validation->set_message('invalid_postal', 'Invalid postal code');
			if($this->input->post('cu_lat')=="" && $this->input->post('cu_long')==""){
				$this->form_validation->set_rules('cu_postal', 'Postal','invalid_postal');
			}
			if (empty($_FILES['cu_image']['name']))
				{
					$this->form_validation->set_rules('cu_image', 'Image', 'required');
				}
				
				if (empty($_FILES['cu_logo']['name']))
				{
					$this->form_validation->set_rules('cu_logo', 'Logo Image', 'required');
				}
				
				
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){

				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/customer/temp/add',$data);
				$this->load->view('admin/footer');
			}else{

				$data['tags'] = array_filter(explode(',', $this->security->xss_clean($this->input->post('cu_tag'))));
					 
						
				 $targetPath = getcwd() . '/uploads/customer/';			 
				 $temp = explode(".", $_FILES["cu_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["cu_image"]["tmp_name"], $targetPath.$newfilename1);
				 
				 $targetPath1 = getcwd() . '/uploads/brand/';			 
				 $temp1 = explode(".", $_FILES["cu_logo"]["name"]);
				 $cu_logo = round(microtime(true)) . '.' . end($temp1);
				 move_uploaded_file($_FILES["cu_logo"]["tmp_name"], $targetPath1.$cu_logo);
				 
				 $data_to_store = array(
					'cu_name' => $this->security->xss_clean($this->input->post('cu_name')),
					'cu_email' => $this->security->xss_clean($this->input->post('cu_email')),
					'cu_mobile' => $this->security->xss_clean($this->input->post('cu_mobile')),
					'cu_address' => $this->security->xss_clean($this->input->post('cu_address')),
					'cu_postal' => $this->security->xss_clean($this->input->post('cu_postal')),
					'cu_lat' => $this->security->xss_clean($this->input->post('cu_lat')),
					'cu_long' => $this->security->xss_clean($this->input->post('cu_long')),
					'cu_description' => $this->security->xss_clean($this->input->post('cu_description')),
					'cu_website' => $this->security->xss_clean($this->input->post('cu_website')),
					'category_id' => $this->security->xss_clean($this->input->post('category')),
					'cu_logo_name' => $cu_logo,
					'cu_image_name' => $newfilename1,
					'cu_branch'=>$this->security->xss_clean($this->input->post('cu_branch')),
					'cu_hour'=>$this->security->xss_clean($this->input->post('cu_hour')),
					'cu_service_type' => $this->security->xss_clean($this->input->post('cu_service_type')),
					'cu_password' => hash('sha256',trim($this->security->xss_clean($this->input->post('cu_password')))),
				);
				if($id = $this->Customer_model->addCustomer($data_to_store)){
					$this->Customer_model->addCustomerTag($id,$data['tags']);
						/* Files uploading */
					//echo $this->input->post('tmpuniquepath');
						$filepath = getcwd()."/upload/shop_image/".$this->input->post('tmpuniquepath');
						$new_filepath = getcwd()."/upload/shop_image/".$id;
						
						//if folder exist, delete
						if (file_exists($new_filepath))
							rename($new_filepath, $new_filepath.'_'.microtime());
							
						if(is_dir($filepath)){
							//echo $filepath ;
							rename($filepath, $new_filepath);

							// Save Image Path to DB
							$folder_path = getcwd()."/upload/shop_image/".$id.'/';
							$url = 'upload/shop_image/'.$id.'/';
							
							if (is_dir($folder_path)) {
								
							    $dir = opendir($folder_path);
							    $list = array();

							   while($file = readdir($dir)){
							        if ($file != '.' and $file != '..'){
							            // add the filename, to be sure not to
							            // overwrite a array key
							            if(is_file($folder_path . $file)){
											$bin_string = file_get_contents($folder_path . $file);
											 $hex_string = base64_encode($bin_string);
							            	$data= array(
												'cu_id' => $id,
												'sp_name' => $url.$file,
												
											);
							    			$this->db->insert('shop_image', $data);
							            }
							        }
							    }
							    closedir($dir);
							}
							// End Save Image Path to DB
						}
				
							
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
					redirect(current_url());		
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error saving customer into the system!</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/customer/temp/add',$data);
				$this->load->view('admin/footer');
			}
			
		}else{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/customer/temp/add',$data);
			$this->load->view('admin/footer');
		}
	}
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/uploads/customer/'.$image_name, $data);
	}
	
	private function createLogoJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/uploads/brand/'.$image_name, $data);
	}
	
	private function createJPGFromBase64ForShopImages($data, $url_image_data){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() .'/'. $url_image_data, $data);
	}
	
	public function add()
	{
		
		
		$data['category'] = $this->Customer_model->getCategory();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			 //form validation	
			 
			$this->form_validation->set_rules('cu_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('cu_email', ' Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('cu_mobile', ' Mobile', 'trim|required');
			$this->form_validation->set_rules('cu_address', 'Address', 'trim|required');
			//$this->form_validation->set_rules('cu_postal', 'Postal code', 'trim|required');
			$this->form_validation->set_rules('cu_description', 'Description', 'trim|required');
			$this->form_validation->set_rules('cu_service_type', 'Service Type', 'trim|required');
			$this->form_validation->set_rules('cu_tag', 'Tag', 'trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');
			
			$this->form_validation->set_rules('cu_password', 'Password', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('cu_password_confirm', 'Confirm Password', 'required|trim|matches[cu_password]');
			
			$this->form_validation->set_message('invalid_postal', 'Invalid postal code');
			if($this->input->post('cu_lat')=="" && $this->input->post('cu_long')==""){
				$this->form_validation->set_rules('cu_postal', 'Postal','invalid_postal');
			}
			
			$this->form_validation->set_rules('cu_image', 'Image', 'trim|required');
			$this->form_validation->set_rules('cu_logo', 'Logo Image', 'trim');
			
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){

				$data['shop_image_return'] = $this->input->post('data_shop_image');
				$data['image_sort_order_return'] = $this->input->post('image_sort_order');
				$data['logo_return'] = $this->input->post('cu_logo');
				$data['company_return'] = $this->input->post('cu_image');
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/customer/temp/add',$data);
				$this->load->view('admin/footer');
			}else{

				$data['tags'] = array_filter(explode(',', $this->security->xss_clean($this->input->post('cu_tag'))));
				
				
				 ///////////////////////////////////////////////////
				 if($this->input->post('cu_image')){
						$company_image =  'c_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64($this->input->post('cu_image'), $company_image);
					}
				if($this->input->post('cu_logo')){
						$cu_logo =  'l_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createLogoJPGFromBase64($this->input->post('cu_logo'), $cu_logo);
				}else{
					$cu_logo="";
				}
				 ///////////////////////////////////////////////////
				 
				 
				 
				 $data_to_store = array(
					'cu_name' => $this->security->xss_clean($this->input->post('cu_name')),
					'cu_email' => $this->security->xss_clean($this->input->post('cu_email')),
					'cu_mobile' => $this->security->xss_clean($this->input->post('cu_mobile')),
					'cu_address' => $this->security->xss_clean($this->input->post('cu_address')),
					'cu_postal' => $this->security->xss_clean($this->input->post('cu_postal')),
					'cu_lat' => $this->security->xss_clean($this->input->post('cu_lat')),
					'cu_long' => $this->security->xss_clean($this->input->post('cu_long')),
					'cu_description' => $this->security->xss_clean($this->input->post('cu_description')),
					'cu_website' => $this->security->xss_clean($this->input->post('cu_website')),
					'category_id' => $this->security->xss_clean($this->input->post('category')),
					'cu_status' => $this->security->xss_clean($this->input->post('cu_status')),
					'cu_show_brand' => $this->security->xss_clean($this->input->post('cu_show_brand')),
					'cu_start_date' => $this->security->xss_clean($this->input->post('cu_start_date')),
					'cu_end_date' => $this->security->xss_clean($this->input->post('cu_end_date')),
					'cu_logo_name' => $cu_logo,
					'cu_image_name' => $company_image,
					'cu_branch'=>$this->security->xss_clean($this->input->post('cu_branch')),
					'cu_hour'=>$this->security->xss_clean($this->input->post('cu_hour')),
					'cu_service_type' => $this->security->xss_clean($this->input->post('cu_service_type')),
					'cu_password' => hash('sha256',trim($this->security->xss_clean($this->input->post('cu_password')))),
				);
				if($id = $this->Customer_model->addCustomer($data_to_store)){
					$this->Customer_model->addCustomerTag($id,$data['tags']);
					
					
					///////////////////////////////////////////////
					$shop_images_array 		= $this->input->post('data_shop_image');
					$image_sort_order_array = $this->input->post('image_sort_order');
					if(count($shop_images_array) > 0){
						$shop_image_name = array();
						
						//check folder not exists, create folder
						//if exists, remove all file as it is add method
						$shop_image_path = getcwd() . '/upload/shop_image/'.$id;
						if (!file_exists($shop_image_path)) {
							mkdir($shop_image_path, 0777, true);
						}else{
							$files = glob($shop_image_path.'/*'); // get all file names
							foreach($files as $file){ // iterate files
							  if(is_file($file))
								unlink($file); // delete file
							}
						}
						
						for($i=0; $i < count($shop_images_array); $i++){
							$shop_image_name[$i]['cu_id'] 	=  $id;
							$shop_image_name[$i]['sp_name'] =  'upload/shop_image/' . $id . '/' . $id . '_sh_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
							$shop_image_name[$i]['sort_order'] = $image_sort_order_array[$i] ;
							$this->createJPGFromBase64ForShopImages($shop_images_array[$i], $shop_image_name[$i]['sp_name']);
						}
						
						$this->Customer_model->insertShopImageBatchArray($shop_image_name);
					}
					
					
					///////////////////////////////////////////////
							
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
					redirect(current_url());		
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error saving customer into the system!</div>');
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/customer/temp/add',$data);
				$this->load->view('admin/footer');
			}
			
		}else{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/customer/temp/add',$data);
			$this->load->view('admin/footer');
		}
	}
	
	
	public function update()
	{
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('customer');
		}
		$data['category'] = $this->Customer_model->getCategory();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			//form validation			
			$this->form_validation->set_rules('cu_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('cu_email', ' Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('cu_mobile', ' Mobile', 'trim|required');
			$this->form_validation->set_rules('cu_address', 'Address', 'trim|required');
// 			$this->form_validation->set_rules('cu_postal', 'Postal code', 'trim|required');
			$this->form_validation->set_rules('cu_description', 'Description', 'trim|required');
			$this->form_validation->set_rules('cu_service_type', 'Service Type', 'trim|required');
			$this->form_validation->set_rules('cu_tag', 'Tag', 'trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');
			
			
			
			$this->form_validation->set_rules('cu_password', 'Password', 'trim|min_length[5]');
			$this->form_validation->set_rules('cu_password_confirm', 'Confirm Password', 'trim|matches[cu_password]');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run() === true)
			{ 
				$data['tags'] = array_filter(explode(',', $this->security->xss_clean($this->input->post('cu_tag'))));
				
				 $data_to_store = array(
					'cu_name' => $this->security->xss_clean($this->input->post('cu_name')),
					'cu_email' => $this->security->xss_clean($this->input->post('cu_email')),
					'cu_mobile' => $this->security->xss_clean($this->input->post('cu_mobile')),
					'cu_address' => $this->security->xss_clean($this->input->post('cu_address')),
					'cu_postal' => $this->security->xss_clean($this->input->post('cu_postal')),
					'category_id' => $this->security->xss_clean($this->input->post('category')),
					'cu_lat' => $this->security->xss_clean($this->input->post('cu_lat')),
					'cu_long' => $this->security->xss_clean($this->input->post('cu_long')),
					'cu_description' => $this->security->xss_clean($this->input->post('cu_description')),
					'cu_website' => $this->security->xss_clean($this->input->post('cu_website')),
						'cu_branch'=>$this->security->xss_clean($this->input->post('cu_branch')),
					'cu_hour'=>$this->security->xss_clean($this->input->post('cu_hour')),
					'cu_service_type' => $this->security->xss_clean($this->input->post('cu_service_type')),
					'cu_show_brand' => $this->security->xss_clean($this->input->post('cu_show_brand')),
					'cu_status' => $this->security->xss_clean($this->input->post('cu_status')),
					'cu_start_date' => $this->security->xss_clean($this->input->post('cu_start_date')),
					'cu_end_date' => $this->security->xss_clean($this->input->post('cu_end_date')),
					
				);
				
				if(trim($this->security->xss_clean($this->input->post('cu_password'))) != ""){
					$data_to_store['cu_password'] = hash('sha256',trim($this->security->xss_clean($this->input->post('cu_password'))));
				}
				
				 ///////////////////////////////////////////////////
				 if($this->input->post('cu_image') && $this->input->post('cu_image') != ""){
						$company_image =  'c_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$data_to_store['cu_image_name'] = $company_image;
						
						
						$targetPath = getcwd() . '/uploads/customer/';
						if(file_exists($targetPath.$this->input->post('old_cu_image'))){
							unlink($targetPath.$this->input->post('old_cu_image'));
						}
						
						$this->createJPGFromBase64($this->input->post('cu_image'), $company_image);
					}
				if($this->input->post('cu_logo') && $this->input->post('cu_logo') != ""){
						$cu_logo =  'l_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$data_to_store['cu_logo_name'] = $cu_logo;
						
						$targetPath = getcwd() . '/uploads/brand/';
						if(file_exists($targetPath.$this->input->post('old_brand_image'))){
							unlink($targetPath.$this->input->post('old_brand_image'));
						}
						
						$this->createLogoJPGFromBase64($this->input->post('cu_logo'), $cu_logo);
					}
				 ///////////////////////////////////////////////////
				
				
				if($data['tags'] != ""){
					if($this->Customer_model->deleteCustomerTag($id)){
						$this->Customer_model->addCustomerTag($id,$data['tags']);
					}					
				}
				
						
				if($this->Customer_model->updateCustomer($id, $data_to_store)){
					
						//update previous images sort order
						$shop_images_sort_string = $this->input->post('cu_shop_image_sort_order');
						if($shop_images_sort_string !=""){
							$shop_images_sort_string = substr($shop_images_sort_string, 0 , -1);
							$image_item_array = explode(",", $shop_images_sort_string);
							$updateArray = array();
							foreach($image_item_array as $item){
								$updateArray[] = array('sp_id'=> substr($item, 0, stripos($item, '_')), 'sort_order'=>substr($item, (stripos($item, '_')+1))); 
							}
							$this->Customer_model->updateShopImageBatchArray($updateArray);
						}
						
					
						///////////////////////////////////////////////
						$shop_images_array = $this->input->post('data_shop_image');
						$image_sort_order_array = $this->input->post('image_sort_order');
						if(count($shop_images_array) > 0){
							$shop_image_name = array();
							
							//check folder not exists, create folder
							//if exists, remove all file as it is add method
							$shop_image_path = getcwd() . '/upload/shop_image/'.$id;
							if (!file_exists($shop_image_path)) {
								mkdir($shop_image_path, 0777, true);
							}
							
							for($i=0; $i < count($shop_images_array); $i++){
								$shop_image_name[$i]['cu_id'] 	=  $id;
								$shop_image_name[$i]['sp_name'] =  'upload/shop_image/' . $id . '/' . $id . '_sh_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$shop_image_name[$i]['sort_order'] = $image_sort_order_array[$i] ;
								$this->createJPGFromBase64ForShopImages($shop_images_array[$i], $shop_image_name[$i]['sp_name']);
							}
							
							$this->Customer_model->insertShopImageBatchArray($shop_image_name);
						}
						
						
						///////////////////////////////////////////////
						
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully update customer.</div>');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error updating customer into the system!</div>');
				}
				redirect('customer/update/'.$id.'');
			}else{
					$data['shop_image_return'] = $this->input->post('data_shop_image');
					$data['image_sort_order_return'] = $this->input->post('image_sort_order');
					$data['logo_return'] = $this->input->post('cu_logo');
					$data['company_return'] = $this->input->post('cu_image');
			
			}
			
		}
		
		

			

		if($data['customer'] = $this->Customer_model->getCustomerDataById($id)){
			$tag = $this->Customer_model->initTag($data['customer']->cu_id);
			//['Hello', 'World', 'Example', 'Tags']
			$data['tag_array_string'] ="";
			$data['tag_comma_string'] ="";
			if(count($tag) >0 ){
				$data['tag_array_string'].= '[';
				for($i=0; $i <count($tag);$i++){
					$data['tag_array_string'].= "'".$tag[$i] ."'," ;
					$data['tag_comma_string'].= $tag[$i] ."," ;
				}
				$data['tag_array_string'] = substr($data['tag_array_string'], 0,-1);
				$data['tag_comma_string'] = substr($data['tag_comma_string'], 0,-1);
				$data['tag_array_string'].= ']';
			}
			$data['category'] = $this->Customer_model->getCategory();
			$data['shopimages'] = $this->Customer_model->getShopImages($id);
			//load the view
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/customer/temp/update', $data);
			$this->load->view('admin/footer');	
		}else{
			redirect('customer');
		}
		
	}
	
	function removeShopImage(){
		$sp_id 			= $this->security->xss_clean($this->input->post('sp_id'));
		$customer_id 	= $this->security->xss_clean($this->input->post('id'));
		
		$return = array('status'=>'fail');
		
		if(is_numeric($sp_id) && $sp_id > 0 && is_numeric($customer_id) && $customer_id > 0 ){
			if($shop_image_name = $this->Customer_model->getShopImageNameByIDs($customer_id, $sp_id)){
				//remove from db
				$this->Customer_model->deleteShopImageNameByIDs($customer_id, $sp_id);
			
				//remove file from server
				if(file_exists(getcwd() .'/'. $shop_image_name)){
					unlink(getcwd() .'/'. $shop_image_name);
				}
				
				$return = array('status'=>'success', 'sp_id'=>$sp_id, 'customer_id'=>$customer_id);
			}
		}
		
		echo json_encode($return);
		
	}
	
	function removeLogoImage(){
		$oldimage 			= $this->security->xss_clean($this->input->post('oldimage'));
		$customer_id 	= $this->security->xss_clean($this->input->post('id'));
		
		$return = array('status'=>'fail');
		
		if(is_numeric($customer_id) && $customer_id > 0 ){
		
			//remove from db
			$this->Customer_model->deleteLogoImageByID($customer_id);
		
			//remove file from server
			if(file_exists(getcwd() .'/uploads/brand/'. $oldimage)){
				unlink(getcwd() .'/uploads/brand/'. $oldimage);
			}
			
			$return = array('status'=>'success');
			
		}
		
		echo json_encode($return);
		
	}
	
	
	function remove_imagepath(){
		if(isset($_GET['shopimageID']) && isset($_GET['filename'])){
			$id = $_GET['shopimageID'];
			$image_name = 'upload/shop_image/'.$_GET['shopimageID'].'/'.$_GET['filename'];
			$this->db->where('cu_id',$id);
			$this->db->where('sp_name',$image_name);
			$this->db->delete('shop_image');
			echo "Deleted Image Path";

		}
	}

	
	/**
    * delete customer
    * @Ei
    */
	function deleteCustomer()
    {
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
        //product id 
        $id = $this->uri->segment(3);
		$this->Customer_model->deleteCustomer($id);
       
        redirect('customer');
    }
	
	
	function image_upload(){
		$folder_name = $this->uri->segment(3);
		$filepath = getcwd()."/upload/shop_image/".$folder_name;
		if(is_dir($filepath)){
			$tempFile = $_FILES['file']['tmp_name'];
			$name = $_FILES['file']['name'];
			$ext = end((explode(".", $name)));
			$fileName = strtolower(md5("v" . rand(1000,9999) . time())) . "." . $ext;
			$targetPath =  getcwd()."/upload/shop_image/".$folder_name."/";
			$targetFile = $targetPath . $fileName ;
			move_uploaded_file($tempFile, $targetFile);
		}else{
			$tempFile = $_FILES['file']['tmp_name'];
			$name = $_FILES['file']['name'];
			$ext = end((explode(".", $name)));
			$fileName = strtolower(md5("v" . rand(1000,9999) . time())) . "." . $ext;
			$targetPath =  getcwd()."/upload/shop_image/".$folder_name."/";
			$targetFile = $targetPath . $fileName ;
			move_uploaded_file($tempFile, $targetFile);
		}
	}
	
	
	// controller
		public function send_gcm()
		{
			// simple loading
			// note: you have to specify API key in config before
				$this->load->library('gcm');

			// simple adding message. You can also add message in the data,
			// but if you specified it with setMesage() already
			// then setMessage's messages will have bigger priority
				$this->gcm->setMessage('Test message '.date('d.m.Y H:s:i'));

			// add recepient or few
				$this->gcm->addRecepient('RegistrationId');
				$this->gcm->addRecepient('New reg id');

			// set additional data
				$this->gcm->setData(array(
					'some_key' => 'some_val'
				));

			// also you can add time to live
				$this->gcm->setTtl(500);
			// and unset in further
				$this->gcm->setTtl(false);

			// set group for messages if needed
				$this->gcm->setGroup('Test');
			// or set to default
				$this->gcm->setGroup(false);

			// then send
				if ($this->gcm->send())
					echo 'Success for all messages';
				else
					echo 'Some messages have errors';

			// and see responses for more info
				print_r($this->gcm->status);
				print_r($this->gcm->messagesStatuses);

			die(' Worked.');
		}
		
	public function logout(){
		$this->session->sess_destroy();
		redirect('customer/login');
	}
}