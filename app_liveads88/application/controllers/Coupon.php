<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Coupon Module
  *
  * This module is for Coupon function.
  *	@EI EI 
  * @return void
  */
class Coupon extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Coupon_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about coupon list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/coupon/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about coupon datatable
    * @Ei
    */
	public function approve($coupon_id, $valid_from, $purchase_itemid){
		//echo $valid_from; exit;
		$ads=array();
		$sql="
				SELECT p.price, p.days
				FROM coupon c
				INNER JOIN purchaseads_items pi
				ON c.purchase_itemid=pi.item_id
				INNER JOIN adscomponent_price p
				ON pi.selectedpriceid=p.price_id
				WHERE c.cp_id=$coupon_id
			";
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$ads=$query->row();
		}
		
		//echo $valid_from; echo "<br>";
		//echo date('Y-m-d', strtotime("+30 days")); // get next 30 days after current date
		//$newDate = date('Y-m-d', strtotime('+15 days',$valid_from));
		
	$date = strtotime(date("Y-m-d", strtotime($valid_from)) . " +{$ads->days} days"); // get next 30 days from valid from date

		$cp_valid_to=date('Y-m-d', $date);
		
		$this->db->query(
			"UPDATE `coupon` SET `livestatus` = '2', cp_valid_to='$cp_valid_to', paid_ads_start_date='$valid_from', paid_ads_end_date='$cp_valid_to' WHERE `cp_id` = ".$coupon_id
		);
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">This item is approved by admin.</div>');
		redirect('coupon/update/'.$coupon_id);
	}
	public function reject($coupon_id, $valid_from){
		//echo $valid_from; exit;
		//echo "UPDATE `coupon` SET `livestatus` = '1', cp_valid_to = NULL WHERE `cp_id` = ".$coupon_id; exit;
		$this->db->query(
			"UPDATE `coupon` SET `livestatus` = '1', cp_valid_to = NULL WHERE `cp_id` = ".$coupon_id
		);
		
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">This item is rejected by admin.</div>');
		redirect('coupon/update/'.$coupon_id);
	}
	
	public function coupon_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'cp_created',	
			);	
		$countsql="";
		$sql = "SELECT customer.cu_name,
				`coupon`.cp_id,
				`coupon`.customer_id,
				`coupon`.cp_name,
				`coupon`.cp_description,
				`coupon`.cp_quantity,
				`coupon`.cp_code,
				`coupon`.cp_valid_from,
				`coupon`.cp_valid_to,
				`coupon`.ispurchased,
				`coupon`.livestatus";
		$countsql.=" FROM
				`coupon`
				LEFT JOIN customer ON `coupon`.customer_id = customer.cu_id WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$countsql.=" AND ( `coupon`.cp_name LIKE '".$requestData['search']['value']."%' )";    
		}
		//echo $requestData['order'][0]['column'];
		$countsql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir'];
		$limitsql="  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
		$sql=$sql.$countsql.$limitsql;
		//echo $countsql; exit;
		$query = $this->db->query($sql);
		//print_r($query->result());
		//$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount ".$countsql
		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			
			$tmpentry[] = $row['cp_name'];
			$tmpentry[] = $row['cu_name'];
			$tmpentry[] = $row['cp_quantity'];			
			$tmpentry[] = $row['cp_description'];
			$tmpentry[] = $row['cp_code'];
			$tmpentry[] = $row['cp_valid_from'];
			$tmpentry[] = $row['cp_valid_to'];
			
			if($row['livestatus']==0 && $row['ispurchased']==0){
			$tmpentry[] = "<a href='".base_url()."coupon/update/".$row['cp_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."coupon/deleteCoupon/".$row['cp_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
			}else if($row['livestatus']==1 && $row['ispurchased']==1){		
			$tmpentry[] = "<a href='".base_url()."coupon/update/".$row['cp_id']."' class='btn btn-primary'>Approve</a>";
			}else if($row['livestatus']==0 && $row['ispurchased']==1){
			$tmpentry[] = "<a href='".base_url()."coupon/update/".$row['cp_id']."' class='btn btn-info'>Detail</a>";
			}else if($row['livestatus']==2 && $row['ispurchased']==1){
			$tmpentry[] = "<a href='".base_url()."coupon/update/".$row['cp_id']."' class='btn btn-info'>Detail</a>";
			}
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

		file_put_contents(getcwd() . '/uploads/coupon/'.$image_name, $data);
	}
	/**
	  *  add coupon
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('cp_name', ' Coupon Name', 'trim|required');
			$this->form_validation->set_rules('cp_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('cp_quantity', ' Quantity', 'trim|numeric');	
			$this->form_validation->set_rules('cp_code', ' Code', 'trim');	
			$this->form_validation->set_rules('cp_valid_from', ' Valid From', 'trim');	
			$this->form_validation->set_rules('cp_valid_to', ' Valid To', 'trim');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_rules('cp_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['cp_image_return'] = $this->input->post('cp_image');
				$data['cp_type_return']  = $this->input->post('cp_type');
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/coupon/add', $data);
				$this->load->view('admin/footer');
			}else{	
				
				$cp_image="";	
				if($this->input->post('cp_image')){
					$cp_image =  'cp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('cp_image'), $cp_image);
				}
								 
				 $data_to_store = array(
					'cp_name' 		 => $this->security->xss_clean($this->input->post('cp_name')),
					'cp_description' => $this->security->xss_clean($this->input->post('cp_description')),
					'customer_id' 	 => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'cp_img_name' => $cp_image,
					'cp_surprise_marked' => $this->security->xss_clean($this->input->post('cp_surprise_marked')),
				);
				
				if($this->input->post('cp_type')=='date'){
					$data_to_store['cp_type'] 		= 'date';
					$data_to_store['cp_quantity'] 	= '';
					$data_to_store['cp_code'] 		= '';
					$data_to_store['cp_valid_from'] = $this->security->xss_clean($this->input->post('cp_valid_from'));
					$data_to_store['cp_valid_to']	= $this->security->xss_clean($this->input->post('cp_valid_to'));
				}else{
					$data_to_store['cp_type'] 		= 'quantity';
					$data_to_store['cp_quantity'] 	= $this->security->xss_clean($this->input->post('cp_quantity'));
					$data_to_store['cp_code'] 		= $this->security->xss_clean($this->input->post('cp_code'));
					$data_to_store['cp_valid_from'] = '';
					$data_to_store['cp_valid_to'] 	= '';
				}
				
				if($this->Coupon_model->addCoupon($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('coupon/add');
			}
			
		}else{
			
			$data['cp_type_return']  = 'date';
			
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$string = '';
			 for ($i = 0; $i < 8; $i++) {
				  $string .= $characters[rand(0, strlen($characters) - 1)];
			 }
			$data['coupon_code'] = $string;
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/coupon/add', $data);
			$this->load->view('admin/footer');
		}
	}
	
	/**
	  * update coupon
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('coupon');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('cp_name', ' Coupon Name', 'trim|required');
			$this->form_validation->set_rules('cp_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('cp_quantity', ' Quantity', 'numeric');	
			$this->form_validation->set_rules('cp_code', ' Code', 'trim');	
			$this->form_validation->set_rules('cp_valid_from', ' Valid From', 'trim');	
			$this->form_validation->set_rules('cp_valid_to', ' Valid To', 'trim');	
			$this->form_validation->set_rules('paid_ads_start_date', ' Feature Date From', 'trim');	
			$this->form_validation->set_rules('paid_ads_end_date', ' Feature Date To', 'trim');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run()==true)
			{    
				
				
							 
				$data_to_store = array(
					'cp_name' 		 => $this->security->xss_clean($this->input->post('cp_name')),
					'cp_description' => $this->security->xss_clean($this->input->post('cp_description')),
					'customer_id' 	 => $this->security->xss_clean($this->input->post('customer_id')),
					'cp_status' 	 => $this->security->xss_clean($this->input->post('cp_status')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'cp_surprise_marked' => $this->security->xss_clean($this->input->post('cp_surprise_marked')),
				);
				
				if($this->input->post('cp_type')=='date'){
					$data_to_store['cp_type'] 		= 'date';
					$data_to_store['cp_quantity'] 	= '';
					$data_to_store['cp_code'] 		= '';
					$data_to_store['cp_valid_from'] = $this->security->xss_clean($this->input->post('cp_valid_from'));
					$data_to_store['cp_valid_to']	= $this->security->xss_clean($this->input->post('cp_valid_to'));
				}else{
					$data_to_store['cp_type'] 		= 'quantity';
					$data_to_store['cp_quantity'] 	= $this->security->xss_clean($this->input->post('cp_quantity'));
					$data_to_store['cp_code'] 		= $this->security->xss_clean($this->input->post('cp_code'));
					$data_to_store['cp_valid_from'] = '';
					$data_to_store['cp_valid_to'] 	= '';
				}
				
				
				$cp_image="";	
				if($this->input->post('cp_image') && $this->input->post('cp_image')!=""){
					$cp_image =  'cp_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('cp_image'), $cp_image);
					$data_to_store['cp_img_name'] = $cp_image;
					
					//remove old file
					 $targetPath = getcwd() . '/uploads/coupon/';
					 if(file_exists($targetPath.$this->input->post('old_image'))){
							unlink($targetPath.$this->input->post('old_image'));
					 }
				}
				
				//if the insert has returned true then we show the flash message
				if($this->Coupon_model->updateCoupon($id, $data_to_store) === TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('coupon/update/'.$id.'');
			//validation run
			}else{
				$data['cp_image_return'] = $this->input->post('cp_image');
				$data['cp_type_return'] = $this->input->post('cp_type');
			}

		}

		if($data['coupon'] = $this->Coupon_model->getcouponById($id)){
			
			if($data['coupon']->cp_type == 'quantity'){
				$data['cp_type_return'] = 'quantity';
			}else{
				$data['cp_type_return'] = 'date';
			}
			
			
		
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$string = '';
			 for ($i = 0; $i < 8; $i++) {
				  $string .= $characters[rand(0, strlen($characters) - 1)];
			 }
			$data['coupon_code'] = $string;		
			
		//load the view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/coupon/update',$data);
		$this->load->view('admin/footer');	
		}else{
			redirect('coupon');
		}
	}
	
	
	/**
    * delete customer
    * @Ei
    */
	function deleteCoupon()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Coupon_model->deleteCoupon($id);
       
        redirect('coupon');
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 /**
    * Add about coupon list
    * @Ei
    */
	function redeem_report(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/coupon/redeem_list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about coupon datatable
    * @Ei
    */
	public function coupon_redeem_report_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'cp_created',	
			);	
			
		$sql = "SELECT customer.cu_name,
				`coupon`.cp_id,
				`coupon`.customer_id,
				`coupon`.cp_name,
				`coupon`.cp_description,
				`coupon`.cp_quantity,
				`coupon`.cp_usage,
				`coupon`.cp_status ";
		$sql.=" FROM
				`coupon`
				INNER JOIN customer ON `coupon`.customer_id = customer.cu_id WHERE `coupon`.cp_type='quantity' ";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `coupon`.cp_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		
		$record_count_sql= "SELECT COUNT(*) as rowcount FROM coupon WHERE cp_type='quantity' ";
		if( !empty($requestData['search']['value']) ) {  
			$record_count_sql.=" AND ( cp_name LIKE '".$requestData['search']['value']."%' )";    
		}
		
		$resTotalLength = $this->db->query( $record_count_sql );
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['cp_name'];
			$tmpentry[] = $row['cu_name'];
			$tmpentry[] = $row['cp_quantity'];			
			$tmpentry[] = $row['cp_description'];
			$tmpentry[] = $row['cp_usage'];
			$tmpentry[] = ($row['cp_status'] == 0 ? 'Active' :'Inactive');
			$tmpentry[] = "<a href='".base_url()."coupon/redeem_detail/".$row['cp_id']."' class='btn btn-info'>View Detail</a>";			

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
	
	function redeem_detail(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('redeem_report');
		}
		
		if($data['coupon'] = $this->Coupon_model->getcouponById($id)){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/coupon/redeem_detail',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('redeem_report');
		}
	}
	
	
	public function coupon_redeem_detail_datatable(){
		
		$cp_id = $this->uri->segment(3);
		
	
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'redeem_date',	
			);	
			
		$sql = "SELECT
				`coupon_usage`.*,
				`user`.user_name,
				`user`.user_email
				FROM
				`coupon_usage`
				LEFT JOIN user ON `coupon_usage`.user_id = user.user_id
				WHERE
				`coupon_usage`.cp_id =". $cp_id;
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `user`.user_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		
		$record_count_sql= "SELECT COUNT(`coupon_usage`.cpu_id) as rowcount FROM coupon_usage LEFT JOIN user ON `coupon_usage`.user_id = user.user_id WHERE coupon_usage.cp_id =". $cp_id;
		if( !empty($requestData['search']['value']) ) {  
			$record_count_sql.=" AND ( `user`.user_name LIKE '".$requestData['search']['value']."%' )";    
		}
		
		$resTotalLength = $this->db->query( $record_count_sql );
		$recordsTotal = $resTotalLength->row()->rowcount;
		
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['user_name'];
			$tmpentry[] = $row['user_email'];
			$tmpentry[] = $row['redeem_date'];			
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
	
}