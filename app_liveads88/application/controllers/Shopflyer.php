<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopflyer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Flyer_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	

	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flyer/list');
		$this->load->view('admin/footer');
	}
	
	

	public function flyer_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'cu_id',	
			);	
		$sql = "SELECT
				customer.cu_name,
				customer.cu_id
				FROM
				shop_flyer
				INNER JOIN customer ON shop_flyer.cu_id = customer.cu_id GROUP BY shop_flyer.cu_id";
		
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
		
		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM
				shop_flyer
				INNER JOIN customer ON shop_flyer.cu_id = customer.cu_id GROUP BY shop_flyer.cu_id"

		);
		$recordsTotal = isset($resTotalLength->row()->rowcount) ? $resTotalLength->row()->rowcount : 0;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			
			$tmpentry = array();			
			$tmpentry[] = $row['cu_name'];			
			$tmpentry[] = "<a href='".base_url()."shopflyer/update/".$row['cu_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."product/deleteFlyer/".$row['cu_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
	
	
	private function createJPGFromBase64ForFlyerImages($data, $url_image_data){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() .'/'. $url_image_data, $data);
	}
	
	/**
     * Make sure customer_id is available
     *
     * @param  string $customer_id
     * @param  string|null $current
     * @return int|boolean
     */
	function _check_customer_already_added($customer_id, $current)
    {
        if (trim($customer_id) != trim($current) && $this->Flyer_model->check_customer_flyer_exists($customer_id))
        {
            $this->form_validation->set_message('_check_customer_already_added', "The Selected Customer is already add. Please select another customer or edit on this customer.");
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
	/**
	  *  add event
	  *
	*/
	public function add()
	{

		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation		
					 

			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required|callback__check_customer_already_added[]');	
			
			$this->load->model('Customer_model');
			if($this->Customer_model->check_customer($this->input->post('customer_id'))){
				$this->form_validation->set_message('check_customer', 'Invalid customer');	
				$this->form_validation->set_rules('invalid_customer', ' Customer', 'check_customer');	
			}
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			
			if($this->form_validation->run()==FALSE){
				$data['flyer_image_return'] = $this->input->post('data_flyer_image');
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/flyer/add', $data);
				$this->load->view('admin/footer');
			}else{	 
			
					$id = $this->security->xss_clean($this->input->post('customer_id'));
					
					///////////////////////////////////////////////
					$flyer_images_array = $this->input->post('data_flyer_image');
					if(count($flyer_images_array) > 0){
						$flyer_image = array();
						
						//check folder not exists, create folder
						//if exists, remove all file as it is add method
						$flyer_image_path = getcwd() . '/upload/flyer/'.$id;
						if (!file_exists($flyer_image_path)) {
							mkdir($flyer_image_path, 0777, true);
						}else{
							$files = glob($flyer_image_path.'/*'); // get all file names
							foreach($files as $file){ // iterate files
							  if(is_file($file))
								unlink($file); // delete file
							}
						}
						
						for($i=0; $i < count($flyer_images_array); $i++){
							$flyer_image[$i]['cu_id'] 	=  $id;
							$flyer_image[$i]['spf_name'] =  'upload/flyer/' . $id . '/' . round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
							$this->createJPGFromBase64ForFlyerImages($flyer_images_array[$i], $flyer_image[$i]['spf_name']);
						}
						
						$this->Flyer_model->insertFlyerImageBatchArray($flyer_image);
					}
					
					///////////////////////////////////////////////
					
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
			
				redirect('Shopflyer/add');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/flyer/add');
			$this->load->view('admin/footer');
		}
	}
	
	

	
	/**
	  * update job
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('shopflyer');
		}

		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
		
				$id =  $this->security->xss_clean($this->input->post('customer_id'));	
					
				///////////////////////////////////////////////
				$flyer_images_array = $this->input->post('data_flyer_image');
				if(count($flyer_images_array) > 0){
					$flyer_image = array();
					
					//check folder not exists, create folder
					//if exists, remove all file as it is add method
					$flyer_image_path = getcwd() . '/upload/flyer/'.$id;
					if (!file_exists($flyer_image_path)) {
						mkdir($flyer_image_path, 0777, true);
					}
					
					for($i=0; $i < count($flyer_images_array); $i++){
						$flyer_image[$i]['cu_id'] 	=  $id;
						$flyer_image[$i]['spf_name'] =  'upload/flyer/' . $id . '/' . round(microtime(true)) .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64ForFlyerImages($flyer_images_array[$i], $flyer_image[$i]['spf_name']);
					}
					
					$this->Flyer_model->insertFlyerImageBatchArray($flyer_image);
				}
				
				///////////////////////////////////////////////

				$this->session->set_flashdata('flash_message', 'updated');
				redirect('shopflyer/update/'.$id);

			}//validation run

		}
		
		$data['flyer_images']= $this->Flyer_model->getFlyerImagesByCustomerID($id);
		if(!$data['flyer_images']){
			redirect('shopflyer');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/flyer/update', $data);
		$this->load->view('admin/footer');	
		//print_r($data);
		//load the view
		
	}
	
	
	function removeFlyerImage(){
		
		$spf_id 			= $this->security->xss_clean($this->input->post('spf_id'));
		$cu_id 	= $this->security->xss_clean($this->input->post('cu_id'));
		
		$return = array('status'=>'fail');
		
		if(is_numeric($spf_id) && $spf_id > 0 && is_numeric($cu_id) && $cu_id > 0 ){
			if($flyer_image_name = $this->Flyer_model->getFlyerImageNameByIDs($cu_id, $spf_id)){
				//remove from db
				$this->Flyer_model->deleteFlyerImageNameByIDs($cu_id, $spf_id);
			
				//remove file from server
				if(file_exists(getcwd() .'/'. $flyer_image_name)){
					unlink(getcwd() .'/'. $flyer_image_name);
				}
				
				$return = array('status'=>'success', 'spf_id'=>$spf_id, 'cu_id'=>$cu_id);
			}
		}
		
		echo json_encode($return);
	}
	
	function remove_imagepath(){
		if(isset($_GET['customerID']) && isset($_GET['filename'])){
			$id = $_GET['customerID'];
			$image_name = 'upload/flyer/'.$_GET['customerID'].'/'.$_GET['filename'];
			$this->db->where('cu_id',$id);
			$this->db->where('spf_name',$image_name);
			$this->db->delete('shop_flyer');
			echo "Deleted Image Path";

		}
	}
	
		

	
	
	/**
    * delete event
    * @Ei
    */
	function deleteProduct()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Product_model->deleteProduct($id);
       
        redirect('product');
    }
	
}