<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Flash deal ads function.
  *	@EI EI 
  * @return void
  */
class Flashdealads extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('flashdealads_model');
		$this->load->library(array('form_validation','session','pagination', 'cart'));
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
		$this->load->view('admin/flashdealads/list');
		$this->load->view('admin/footer');
	}
	
	
	public function Flashdealads_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'fdads_created',	
			);	
			
		$sql = "SELECT * ";
		$sql.=" FROM flash_deal_ads WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( fdads_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		
		if( !empty($requestData['search']['value']) ) {  
			$recordCountSql=" AND ( fdads_name LIKE '".$requestData['search']['value']."%' )";    
		}else{
			$recordCountSql=" ";    
		}
		
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM flash_deal_ads WHERE 1=1".$recordCountSql

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['fdads_name'];
			$tmpentry[] = $row['fdads_duration'];
			$tmpentry[] = $row['fdads_price'];
			$tmpentry[] = ($row['fdads_status']==1) ? "active" : "inactive";			
			$tmpentry[] = $row['fdads_created'];
			$tmpentry[] = "<a href='".base_url()."flashdealads/update/".$row['fdads_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."flashdealads/delete/".$row['fdads_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
	  *  add customer
	  *
	*/
	public function add()
	{
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
		$data['fdads_data']['fdads_duration'] = "";
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			
			
			 //form validation	
			 
			$this->form_validation->set_rules('fdads_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('fdads_price', ' Price', 'trim|numeric|required');
			$this->form_validation->set_rules('fdads_status', ' Status', 'trim|numeric');
			$this->form_validation->set_rules('fdads_duration', 'Duration', 'trim|required');
				
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				$data['fdads_data']['fdads_duration'] = $this->security->xss_clean($this->input->post('fdads_duration'));
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flashdealads/add', $data);
				$this->load->view('admin/footer');
			}else{
				 $data_to_store = array(
					'fdads_name' => $this->security->xss_clean($this->input->post('fdads_name')),
					'fdads_price' => $this->security->xss_clean($this->input->post('fdads_price')),
					'fdads_status' => $this->security->xss_clean($this->input->post('fdads_status')),
					'fdads_duration' => $this->security->xss_clean($this->input->post('fdads_duration')),
				);
				if($id = $this->flashdealads_model->addFlashDealAds($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
					redirect(current_url());		
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error saving into the system!</div>');
				}
				
				$data['fdads_data']['fdads_duration'] = "";
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flashdealads/add', $data);
				$this->load->view('admin/footer');
			}
			
		}else{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flashdealads/add', $data);
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
			redirect('flashdealads');
		}
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			//form validation			
			$this->form_validation->set_rules('fdads_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('fdads_price', ' Price', 'trim|numeric|required');
			$this->form_validation->set_rules('fdads_status', ' Status', 'trim|numeric');
			$this->form_validation->set_rules('fdads_duration', 'Duration', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{ 
				
				$data_to_store = array(
					'fdads_name' => $this->security->xss_clean($this->input->post('fdads_name')),
					'fdads_price' => $this->security->xss_clean($this->input->post('fdads_price')),
					'fdads_status' => $this->security->xss_clean($this->input->post('fdads_status')),
					'fdads_duration' => $this->security->xss_clean($this->input->post('fdads_duration')),
				);
				
				
				if($this->flashdealads_model->updateFlashDealAds($id, $data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully update.</div>');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error updating into the system!</div>');
				}
				redirect('flashdealads/update/'.$id);
			}
		}
		

		if($data['flashdealads'] = $this->flashdealads_model->getFlashDealAdsDataById($id)){
			//load the view
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flashdealads/update', $data);
			$this->load->view('admin/footer');	
		}else{
			redirect('flashdealads');
		}
		
	}
	
	
	/**
    * delete customer
    * @Ei
    */
	function delete()
    {
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
		
        //product id 
        $id = $this->uri->segment(3);
		$this->flashdealads_model->deleteFlashDealAds($id);
       
        redirect('flashdealads');
    }
	
	
	function purchase(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$data['flashdealads'] = $this->flashdealads_model->getActiveFlashDealAds();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flashdealads/purchase', $data);
		$this->load->view('admin/footer');
	}
	
	function addtocart(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
     
		if($this->flashdealads_model->validate_add_cart_item() == TRUE){
			 
			// Check if user has javascript enabled
			if($this->input->post('ajax') != '1'){
				redirect('flashdealads/purchase'); // If javascript is not enabled, reload the page with new data
			}else{
				echo 'true'; // If javascript is enabled, return true, so the cart gets updated
			}
		}
     
	}
	
	function show_cart(){
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$this->load->view('admin/flashdealads/cart');
	}
	
	function update_cart(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$this->flashdealads_model->validate_update_cart_item();
		redirect('flashdealads/purchase');
	}
	
	function empty_cart(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$this->cart->destroy(); // Destroy all cart data
		redirect('flashdealads/purchase'); // Refresh te page
	}
	
	function checkout(){
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}	
			
			
		
			if($this->cart->contents()){
				if($this->input->server('REQUEST_METHOD') == 'POST'){
					//form validation			
					$this->form_validation->set_rules('payment_method', 'Payment Method', 'trim|required');
					
					$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
					if ($this->form_validation->run())
					{ 
						
						$data_to_store = array(
							'fdo_payment_method' => $this->security->xss_clean($this->input->post('payment_method')),
							'fdo_total'			 => $this->cart->total()
						);
						
						
						if($order_id = $this->flashdealads_model->saveFlashDealAdsOrder($data_to_store)){
							$this->flashdealads_model->saveFlashDealAdsOrderitems($order_id);
							
							
							
							if($data_to_store['fdo_payment_method'] == 'paypal'){
								$this->session->set_userdata('fd_order_id', $order_id);
								redirect('payment/paypal');
							}else{
								$this->cart->destroy();
								$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully purchase.</div>');
							}
						}else{
							$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error purchasing!</div>');
						}
						redirect('flashdealads/purchase');
					}
				}
			
				$data['customer'] = $this->flashdealads_model->getCustomerInfo();
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flashdealads/checkout', $data);
				$this->load->view('admin/footer');
			}else{
				redirect('flashdealads/purchase');
			}
		
	}
	
	
	function purchaselist(){
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flashdealads/purchaselist');
		$this->load->view('admin/footer');
	}
	
	
	public function Purchaseflashdealads_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'flash_deal_ads_order_item.fdoi_name',	
			1 =>'',	
			2 =>'',	
			3 =>'',	
			4 =>'flash_deal_ads_order.fdo_created'
			);	
			
		$sql = "SELECT
				flash_deal_ads_order.fdo_id,
				flash_deal_ads_order.fdo_customer_id,
				flash_deal_ads_order.fdo_created,
				flash_deal_ads_order.fdo_status,
				flash_deal_ads_order_item.fdoi_id,
				flash_deal_ads_order_item.fdoi_name,
				flash_deal_ads_order_item.fdoi_duration,
				flash_deal_ads_order_item.fdoi_price,
				flash_deal_ads_order_item.fdoi_quantity
				FROM
				flash_deal_ads_order
				INNER JOIN flash_deal_ads_order_item ON flash_deal_ads_order.fdo_id = flash_deal_ads_order_item.fdo_id
				WHERE flash_deal_ads_order.fdo_customer_id = ".$this->session->userdata('cu_id')."
				";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( fdoi_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		
		if( !empty($requestData['search']['value']) ) {  
			$recordCountSql=" AND ( fdoi_name LIKE '".$requestData['search']['value']."%' )";    
		}else{
			$recordCountSql=" ";    
		}
		
		$resTotalLength = $this->db->query(
			"SELECT COUNT(flash_deal_ads_order_item.fdoi_id) as rowcount FROM flash_deal_ads_order INNER JOIN flash_deal_ads_order_item ON flash_deal_ads_order.fdo_id = flash_deal_ads_order_item.fdo_id WHERE 1=1".$recordCountSql

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['fdoi_name'];
			$tmpentry[] = $row['fdoi_duration'];
			$tmpentry[] = $row['fdoi_price'];
			$tmpentry[] = ($row['fdo_status']==1) ? "active" : "inactive";			
			$tmpentry[] = $row['fdo_created'];
			$tmpentry[] = "<a href='".base_url()."flashdealads/addproduct/".$row['fdoi_id']."' class='btn btn-info'>ADD Data</a>";			

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
	
	
	public function addproduct()
	{
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'customer' &&  $this->session->userdata('cu_id') > 0 ){
			// authorize
		}else{
			redirect('customer/login');
		}
		
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('flashdealads/purchaselist');
		}
		
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			//form validation			
			$this->form_validation->set_rules('fdoi_prod_title', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('fdoi_prod_price', 'Price', 'trim|numeric|required');
			$this->form_validation->set_rules('fdoi_prod_quantity', 'Quantity', 'trim|numeric');
			$this->form_validation->set_rules('fdoi_prod_description', 'Description', 'trim|required');
			$this->form_validation->set_rules('tmpuniquepath', 'Image File Path ', 'trim|required');
	
			if (empty($_FILES['fdoi_prod_image_name']['name']))
			{
				$this->form_validation->set_rules('fdoi_prod_image_name', 'Image', 'required');
			}
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{
				if ($_FILES["fdoi_prod_image_name"]['size'] >0) {	
				 $targetPath = getcwd() . '/uploads/fdads_product/';
				 $temp = explode(".", $_FILES["fdoi_prod_image_name"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["fdoi_prod_image_name"]["tmp_name"], $targetPath.$newfilename1);
				 unlink($targetPath.$this->input->post('old_image'));
				$data_to_store['fdoi_prod_image_name'] 	= 	$newfilename1;						 
				}	
				
				
				$data_to_store = array(
					'fdoi_prod_title' => $this->security->xss_clean($this->input->post('fdoi_prod_title')),
					'fdoi_prod_price' => $this->security->xss_clean($this->input->post('fdoi_prod_price')),
					'fdoi_prod_quantity' => $this->security->xss_clean($this->input->post('fdoi_prod_quantity')),
					'fdoi_prod_description' => $this->security->xss_clean($this->input->post('fdoi_prod_description')),
				);
				
				
				if($this->flashdealads_model->updateFlashDealAdsOrderitems($id, $data_to_store)){
					
					/////////////////////////////////////////////////////////////////////////
					
						/* Files uploading */
					//echo $this->input->post('tmpuniquepath');
						$filepath = getcwd()."/upload/fdads_files/".$this->input->post('tmpuniquepath');
						$new_filepath = getcwd()."/upload/fdads_files/".$id;
						if(is_dir($filepath)){
							//echo $filepath ;
							rename($filepath, $new_filepath);

							// Save Image Path to DB
							$folder_path = getcwd()."/upload/fdads_files/".$id.'/';
							$url = 'upload/fdads_files/'.$id.'/';
							
							if (is_dir($folder_path)) {
								
							    $dir = opendir($folder_path);
							    $list = array();

							   while($file = readdir($dir)){
							        if ($file != '.' and $file != '..'){
							            // add the filename, to be sure not to
							            // overwrite a array key
							            if(is_file($folder_path . $file)){
							            	$data= array(
												'fdoi_id' => $id,
												'fdoip_img_name' => $url.$file,
											);
							    			$this->db->insert('flash_deal_ads_order_item_prod_image', $data);
							            }
							        }
							    }
							    closedir($dir);
							}
							// End Save Image Path to DB
						}
					/////////////////////////////////////////////////////////////////////////
					
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully update.</div>');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Error updating into the system!</div>');
				}
				redirect('flashdealads/addproduct/'.$id);
			}
		}
		

		if($data['flashdealads_product'] = $this->flashdealads_model->getFlashDealAdsProductDataById($id)){
			//load the view
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flashdealads/addproduct', $data);
			$this->load->view('admin/footer');	
		}else{
			redirect('flashdealads/purchaselist');
		}
		
	}
	
}