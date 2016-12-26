<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Event Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Event extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	public function approve($ev_id, $valid_from, $purchase_itemid){
		
		$ads=array();
		$sql="
				SELECT p.price, p.days
				FROM event c
				INNER JOIN purchaseads_items pi
				ON c.purchase_itemid=pi.item_id
				INNER JOIN adscomponent_price p
				ON pi.selectedpriceid=p.price_id
				WHERE c.ev_id=$ev_id
			";
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$ads=$query->row();
		}
		
		$date = strtotime(date("Y-m-d", strtotime($valid_from)) . " +{$ads->days} days"); 

		$cp_valid_to=date('Y-m-d', $date);
		
		$this->db->query(
			"UPDATE `event` SET `livestatus` = '2', paid_ads_end_date='$cp_valid_to' WHERE `ev_id` = ".$ev_id
		);
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">This item is approved by admin.</div>');
		redirect('event/update/'.$ev_id);
	}
	public function reject($ev_id, $valid_from){
		//echo $valid_from; exit;
		//echo "UPDATE `coupon` SET `livestatus` = '1', cp_valid_to = NULL WHERE `cp_id` = ".$coupon_id; exit;
		$this->db->query(
			"UPDATE `event` SET `livestatus` = '1', paid_ads_end_date = NULL WHERE `ev_id` = ".$ev_id
		);
		
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">This item is rejected by admin.</div>');
		redirect('event/update/'.$ev_id);
	}
	
	 /**
    * Add about event list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/event/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about event datatable
    * @Ei
    */
	public function event_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'ev_created',	
			);	
			
		$sql = "SELECT customer.cu_name,
				`event`.ev_id,
				`event`.livestatus,
				`event`.ispurchased,
				`event`.customer_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_img_base64,
				`event`.ev_description,
				`event`.ev_link,
				`event`.ev_date,
				`event`.ev_like_count,
				`event`.ev_created,
				`event`.ev_status";
		$sql.=" FROM
				`event`
				INNER JOIN customer ON `event`.customer_id = customer.cu_id WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( `event`.ev_title LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM event"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['ev_title'];
			$tmpentry[] = $row['cu_name'];
			$tmpentry[] = $row['ev_location'];			
			$tmpentry[] = $row['ev_date'];
			
			if($row['livestatus']==0 && $row['ispurchased']==0){
			$tmpentry[] = "<a href='".base_url()."event/update/".$row['ev_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."event/deleteEvent/".$row['ev_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
			}else if($row['livestatus']==1 && $row['ispurchased']==1){		
			$tmpentry[] = "<a href='".base_url()."event/update/".$row['ev_id']."' class='btn btn-primary'>Approve</a>";
			}else if($row['livestatus']==0 && $row['ispurchased']==1){
			$tmpentry[] = "<a href='".base_url()."event/update/".$row['ev_id']."' class='btn btn-info'>Detail</a>";
			}else if($row['livestatus']==2 && $row['ispurchased']==1){
			$tmpentry[] = "<a href='".base_url()."event/update/".$row['ev_id']."' class='btn btn-info'>Detail</a>";
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

		file_put_contents(getcwd() . '/uploads/event/'.$image_name, $data);
	}
	
	/**
	  *  add event
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('ev_title', ' Title', 'trim|required');
			$this->form_validation->set_rules('ev_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('ev_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('ev_date', ' Date', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_rules('ev_image', 'Image', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$data['ev_image_return'] = $this->input->post('ev_image');
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/event/add', $data);
				$this->load->view('admin/footer');
			}else{		
					
				$ev_image="";	
				if($this->input->post('ev_image')){
					$ev_image =  'e_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('ev_image'), $ev_image);
				}
					
				 $data_to_store = array(
					'ev_title' => $this->security->xss_clean($this->input->post('ev_title')),
					'ev_location' => $this->security->xss_clean($this->input->post('ev_location')),
					'ev_description' => $this->security->xss_clean($this->input->post('ev_description')),
					'ev_date' => $this->security->xss_clean($this->input->post('ev_date')),
					'ev_link' => $this->security->xss_clean($this->input->post('ev_link')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'ev_img_name' => $ev_image,
				);
				
				
				if($this->Event_model->addEvent($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('event/add');
			}
			
		}
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/event/add');
			$this->load->view('admin/footer');
		
	}
	
	/**
	  * update event
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('event');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('ev_title', ' Title', 'trim|required');
			$this->form_validation->set_rules('ev_location', ' Locaton', 'trim|required');
			$this->form_validation->set_rules('ev_description', ' Description', 'trim|required');
			$this->form_validation->set_rules('ev_date', ' Date', 'trim|required');	
			$this->form_validation->set_rules('customer', ' Customer', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run()==true)
			{    
							 
				 $data_to_store = array(
					'ev_title' => $this->security->xss_clean($this->input->post('ev_title')),
					'ev_location' => $this->security->xss_clean($this->input->post('ev_location')),
					'ev_description' => $this->security->xss_clean($this->input->post('ev_description')),
					'ev_date' => $this->security->xss_clean($this->input->post('ev_date')),
					'ev_link' => $this->security->xss_clean($this->input->post('ev_link')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'ev_status' => $this->input->post('ev_status'),
				);
				
				
				$ev_image="";	
				if($this->input->post('ev_image') && $this->input->post('ev_image')!=""){
					$ev_image =  'e_'. round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
					$this->createJPGFromBase64($this->input->post('ev_image'), $ev_image);
					$data_to_store['ev_img_name'] = $ev_image;
					
					//remove old file
					 $targetPath = getcwd() . '/uploads/event/';
					 if(file_exists($targetPath.$this->input->post('old_image'))){
							unlink($targetPath.$this->input->post('old_image'));
					 }
				}
				
				
				//if the insert has returned true then we show the flash message
				if($this->Event_model->updateEvent($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('event/update/'.$id.'');
			//validation run
			}else{
				$data['ev_image_return'] = $this->input->post('ev_image');
			}

		}

		if($data['event'] = $this->Event_model->getEventById($id)){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/event/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('event');
		}
		//print_r($data);
		//load the view
		
	}
	
	
	/**
    * delete event
    * @Ei
    */
	function deleteEvent()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Event_model->deleteEvent($id);
       
        redirect('event');
    }
}