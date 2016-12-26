<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Banner Module
  *
  * This module is for Banner function.
  *	@EI EI 
  * @return void
  */
class Banner extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Banner_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'admin' &&  $this->session->userdata('admin_id') > 0 ){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	 /**
    * Add about banner list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/banner/list');
		$this->load->view('admin/footer');
		
	}
	
	
	 /**
    * Add about banner datatable
    * @Ei
    */
	public function banner_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'banner_name',	
			1 =>'',	
			2 =>'',	
			3 =>'sequence',	
			);	
			
		$sql = "SELECT banner.*, banner_image.* FROM banner 
				JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE 1=1";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( banner_name LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM banner"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['banner_name'];
		//	echo base_url()."uploads/banner/".$row['bi_home_second_url'];

			if($row['bi_home_first_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_home_first_url']) ){
				$banner_image = $row['bi_home_first_url'];
			}else if($row['bi_home_second_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_home_second_url']) ){
				$banner_image = $row['bi_home_second_url'];
			}else if($row['bi_deal_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_deal_url']) ){
				$banner_image = $row['bi_deal_url'];
			}else if($row['bi_coupon_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_coupon_url']) ){
				$banner_image = $row['bi_coupon_url'];
			}else if($row['bi_promotion_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_promotion_url']) ){
				$banner_image = $row['bi_promotion_url'];
			}else if($row['bi_event_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_event_url']) ){
				$banner_image = $row['bi_event_url'];
			}else if($row['bi_job_url'] !="" && file_exists(getcwd()."/uploads/banner/".$row['bi_job_url']) ){
				$banner_image = $row['bi_job_url'];
			}else{
				$banner_image = false;
			}
			
			$sequence = $row['sequence'] != null ? $row['sequence'] : 0;
			$tmpentry[] = ($banner_image ? "<img src='".base_url()."uploads/banner/".$banner_image."' height='100'>" : "");
			$tmpentry[] = $row['banner_link'];	
			$tmpentry[] = "<input type='text' class='sequence form-control' id='b-".$row['banner_id']."' value='".$sequence."'/>";		
			$tmpentry[] = "<a href='".base_url()."banner/update/".$row['banner_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."banner/deleteBanner/".$row['banner_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

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
	
	function updateSequence() {
		if (isset($_POST['bid']) && isset($_POST['s'])) {
			$sql = "update banner set sequence = ".$_POST['s']." where banner_id = ".$_POST['bid'];
			$this->db->query($sql);
		}
		echo 1;
	}
	
	
	private function createJPGFromBase64($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/uploads/banner/'.$image_name, $data);
	}
	
	private function createJPGFromBase64Banner($data, $image_name){
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		file_put_contents(getcwd() . '/uploads/banner/web/'.$image_name, $data);
	}
	
	private function createImageforApps($filepath, $thumbPath, $maxwidth, $maxheight, $quality=100)
	{   
		$created=false;
		$file_name  = pathinfo($filepath);  
		$format = $file_name['extension'];
		// Get new dimensions
		$newW   = $maxwidth;
		$newH   = $maxheight;

		// Resample
		$thumb = imagecreatetruecolor($newW, $newH);
		$image = imagecreatefromstring(file_get_contents($filepath));
		list($width_orig, $height_orig) = getimagesize($filepath);
		imagecopyresampled($thumb, $image, 0, 0, 0, 0, $newW, $newH, $width_orig, $height_orig);

		// Output
		switch (strtolower($format)) {
			case 'png':
			imagepng($thumb, $thumbPath, 9);
			$created=true;
			break;

			case 'gif':
			imagegif($thumb, $thumbPath);
			$created=true;
			break;

			default:
			imagejpeg($thumb, $thumbPath, $quality);
			$created=true;
			break;
		}
		imagedestroy($image);
		imagedestroy($thumb);
		return $created;    
	}
	
	/**
	  *  add banner
	  *
	*/
	public function add()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('customer_id', 'Customer', 'trim');
			$this->form_validation->set_rules('banner_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('banner_link', 'Link', 'trim');
			$this->form_validation->set_rules('banner_email', 'Email', 'trim|valid_email');	
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
					
				/*	
				$targetPath = getcwd() . '/uploads/banner/';			 
				 $temp = explode(".", $_FILES["banner_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["banner_image"]["tmp_name"], $targetPath.$newfilename1);
				 //$hex_string = base64_encode($bin_string);	
				// unlink($targetPath.$_FILES["banner_image"]["name"]);	
				
				*/
				
				 $data_to_store = array(
					'customer_id' 		 => $this->security->xss_clean($this->input->post('customer_id')),
					'banner_name' 		 => $this->security->xss_clean($this->input->post('banner_name')),
					'banner_linkto' => $this->security->xss_clean($this->input->post('banner_linkto')),
					'banner_link' => $this->security->xss_clean($this->input->post('banner_link')),
					'banner_email' => $this->security->xss_clean($this->input->post('banner_email')),
					//'banner_image_name' => $newfilename1,
					'banner_image_name' => '',
					'coupon' => ($this->input->post('coupon'))? 1:0,
					'event' => ($this->input->post('event'))? 1:0,
					'job' => ($this->input->post('job'))? 1:0,
					'promotion' => ($this->input->post('promotion'))? 1:0,
					'home_top' => ($this->input->post('home_top'))? 1:0,
					'home_bottom' => ($this->input->post('home_bottom'))? 1:0,
					'deal' => ($this->input->post('deal'))? 1:0,
				);
				if($banner_id = $this->Banner_model->addBanner($data_to_store)){
					
					//banner is successfully save, upload images and save into db
					$home_first_image 	= "";
					$home_second_image 	= "";
					$deal_image 		= "";
					$coupon_image 		= "";
					$promotion_image 	= "";
					$event_image 		= "";
					$job_image 			= "";
					
					$app_banner_width  	= 640;
					$app_banner_height  = 200;
				
					if($this->input->post('home_top')){
						$home_first_image =  $banner_id . '_' . 'hf_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64($this->input->post('check_home_first'), $home_first_image);
					}
					if($this->input->post('home_bottom')){
						$home_second_image = $banner_id . '_' . 'hs_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64($this->input->post('check_home_second'), $home_second_image);
					}
					if($this->input->post('deal')){
						$deal_image = $banner_id . '_' . 'd_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Banner($this->input->post('check_deal'), $deal_image);
						
						$this->createImageforApps(getcwd() . '/uploads/banner/web/' . $deal_image, getcwd() . '/uploads/banner/' . $deal_image, $app_banner_width, $app_banner_height, $quality=100);
					}
					if($this->input->post('coupon')){
						$coupon_image = $banner_id . '_' . 'c_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Banner($this->input->post('check_coupon'), $coupon_image);
						
						$this->createImageforApps(getcwd() . '/uploads/banner/web/' . $coupon_image, getcwd() . '/uploads/banner/' . $coupon_image, $app_banner_width, $app_banner_height, $quality=100);
					}
					if($this->input->post('event')){
						$event_image = $banner_id . '_' . 'e_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Banner($this->input->post('check_event'), $event_image);

						$this->createImageforApps(getcwd() . '/uploads/banner/web/' . $event_image, getcwd() . '/uploads/banner/' . $event_image, $app_banner_width, $app_banner_height, $quality=100);						
					}
					if($this->input->post('job')){
						$job_image = $banner_id . '_' . 'j_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Banner($this->input->post('check_job'), $job_image);
						
						$this->createImageforApps(getcwd() . '/uploads/banner/web/' . $job_image, getcwd() . '/uploads/banner/' . $job_image, $app_banner_width, $app_banner_height, $quality=100);						
					}
					if($this->input->post('promotion')){
						$promotion_image = $banner_id . '_' . 'p_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
						$this->createJPGFromBase64Banner($this->input->post('check_promotion'), $promotion_image);
						
						$this->createImageforApps(getcwd() . '/uploads/banner/web/' . $promotion_image, getcwd() . '/uploads/banner/' . $promotion_image, $app_banner_width, $app_banner_height, $quality=100);						
					}
					
					$this->Banner_model->addBannerImages($banner_id, $home_first_image, $home_second_image, $deal_image, $coupon_image, $promotion_image, $event_image, $job_image);
					
					
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect(current_url());
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
		if($data['banner'] = $this->Banner_model->getBannerById($id)){
				
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->form_validation->set_rules('customer_id', 'Customer', 'trim');
				$this->form_validation->set_rules('banner_name', 'Name', 'trim|required');
				$this->form_validation->set_rules('banner_link', 'Link', 'trim');
				$this->form_validation->set_rules('banner_email', 'Email', 'trim|valid_email');	
		
				$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
				if ($this->form_validation->run())
				{    
			
					$data_to_store = array(
						'customer_id' 		 => $this->security->xss_clean($this->input->post('customer_id')),
						'banner_name' 		 => $this->security->xss_clean($this->input->post('banner_name')),
						'banner_type' => $this->security->xss_clean($this->input->post('banner_type')),
						'banner_linkto' => $this->security->xss_clean($this->input->post('banner_linkto')),
						'banner_link' => $this->security->xss_clean($this->input->post('banner_link')),
						'banner_email' => $this->security->xss_clean($this->input->post('banner_email')),
						'banner_image_name' => '',
						'coupon' => ($this->input->post('coupon'))? 1:0,
						'event' => ($this->input->post('event'))? 1:0,
						'job' => ($this->input->post('job'))? 1:0,
						'promotion' => ($this->input->post('promotion'))? 1:0,
						'home_top' => ($this->input->post('home_top'))? 1:0,
						'home_bottom' => ($this->input->post('home_bottom'))? 1:0,
						'deal' => ($this->input->post('deal'))? 1:0,
					);
					
					
					/*
					if ($_FILES["banner_image"]['size'] >0) {	
					 $targetPath = getcwd() . '/uploads/banner/';
					 $temp = explode(".", $_FILES["banner_image"]["name"]);
					 $newfilename1 = round(microtime(true)) . '.' . end($temp);
					 move_uploaded_file($_FILES["banner_image"]["tmp_name"], $targetPath.$newfilename1);
					 unlink($targetPath.$this->input->post('old_image'));
					$data_to_store['banner_image_name'] 	= 	$newfilename1;			 
					}				 
					*/
					
					
					//if the insert has returned true then we show the flash message
					if($this->Banner_model->updateBanner($id, $data_to_store) === TRUE){
						
						if($this->security->xss_clean($this->input->post('edit_image_status')) == 1){
							
							$banner_detail = $data['banner'];
							//remove old file first
							$targetPath = getcwd() . '/uploads/banner/';
							
							if($banner_detail->bi_home_first_url != "" && file_exists($targetPath . $banner_detail->bi_home_first_url)){
								unlink($targetPath . $banner_detail->bi_home_first_url);
							}
							if($banner_detail->bi_home_second_url != "" && file_exists($targetPath . $banner_detail->bi_home_second_url)){
								unlink($targetPath . $banner_detail->bi_home_second_url);
							}
							if($banner_detail->bi_deal_url != "" && file_exists($targetPath . $banner_detail->bi_deal_url)){
								unlink($targetPath . $banner_detail->bi_deal_url);
							}
							if($banner_detail->bi_coupon_url != "" && file_exists($targetPath . $banner_detail->bi_coupon_url)){
								unlink($targetPath . $banner_detail->bi_coupon_url);
							}
							if($banner_detail->bi_promotion_url != "" && file_exists($targetPath . $banner_detail->bi_promotion_url)){
								unlink($targetPath . $banner_detail->bi_promotion_url);
							}
							if($banner_detail->bi_event_url != "" && file_exists($targetPath . $banner_detail->bi_event_url)){
								unlink($targetPath . $banner_detail->bi_event_url);
							}
							if($banner_detail->bi_job_url != "" && file_exists($targetPath . $banner_detail->bi_job_url)){
								unlink($targetPath . $banner_detail->bi_job_url);
							}
							
							//upload new image// need to upload images and db
							//banner is successfully updated, upload images and save into db
							$home_first_image 	= "";
							$home_second_image 	= "";
							$deal_image 		= "";
							$coupon_image 		= "";
							$promotion_image 	= "";
							$event_image 		= "";
							$job_image 			= "";
						
							if($this->input->post('home_top')){
								$home_first_image =  $id . '_' . 'hf_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_home_first'), $home_first_image);
							}
							if($this->input->post('home_bottom')){
								$home_second_image = $id . '_' . 'hs_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_home_second'), $home_second_image);
							}
							if($this->input->post('deal')){
								$deal_image = $id . '_' . 'd_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_deal'), $deal_image);
							}
							if($this->input->post('coupon')){
								$coupon_image = $id . '_' . 'c_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_coupon'), $coupon_image);
							}
							if($this->input->post('event')){
								$event_image = $id . '_' . 'e_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_event'), $event_image);
							}
							if($this->input->post('job')){
								$job_image = $id . '_' . 'j_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_job'), $job_image);
							}
							if($this->input->post('promotion')){
								$promotion_image = $id . '_' . 'p_'. time() .'_'. md5(uniqid(rand(), true)) . '.jpg';
								$this->createJPGFromBase64($this->input->post('check_promotion'), $promotion_image);
							}
							
							$this->Banner_model->updateBannerImages($id, $home_first_image, $home_second_image, $deal_image, $coupon_image, $promotion_image, $event_image, $job_image);
							
							
							
							
							
							
							
							
							
						}
						
						
						$this->session->set_flashdata('flash_message', 'updated');
					}else{
						$this->session->set_flashdata('flash_message', 'not_updated');
					}
					redirect('banner/update/'.$id.'');

				}//validation run

			}

				
			
				
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