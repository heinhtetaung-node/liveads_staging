<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Product Module
  *
  * This module is for product function.
  *	@EI EI 
  * @return void
  */
class Product extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Advertiser_model');
		$this->load->model('Product_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
		
		
		if($this->session->userdata('isLogin')){
			// authorize
		}else{
			redirect('Admin/login');
		}
	}
	
	public function add()
	{
		$query = $this->db->query('SELECT max(pro_id) as product_max_id FROM product');
		$row = $query->row();
		$product_max_id = $row->product_max_id+1;
		$data['product_max_id'] = $product_max_id;
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation		
					 
			$this->form_validation->set_rules('pro_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('pro_price', ' Price', 'trim|required');
			$this->form_validation->set_rules('pro_quantity', ' Quantity', 'trim|numeric|required');
			$this->form_validation->set_rules('pro_expired', ' Expired date', 'trim|required');	
			$this->form_validation->set_rules('pro_discount_amount', ' Discount amount', 'trim|numeric|required');	
			$this->form_validation->set_rules('pro_description', ' Description', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_rules('tmpuniquepath', 'Image File Path ', 'trim|required');
			if (empty($_FILES['pro_image']['name']))
			{
				$this->form_validation->set_rules('pro_image', 'Image', 'required');
			}
			$this->load->model('Customer_model');
			if($this->Customer_model->check_customer($this->input->post('customer_id'))){
				$this->form_validation->set_message('check_customer', 'Invalid customer');	
				$this->form_validation->set_rules('invalid_customer', ' Customer', 'check_customer');	
			}
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			
			if($this->form_validation->run()==FALSE){
				
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/product/add',$data);
				$this->load->view('admin/footer');
			}else{	 
				 $targetPath = getcwd() . '/uploads/product/';			 
				 $temp = explode(".", $_FILES["pro_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["pro_image"]["tmp_name"], $targetPath.$newfilename1);
				 
				 
				 $data_to_store = array(
					'pro_title' => $this->security->xss_clean($this->input->post('pro_name')),
					'pro_price' => $this->security->xss_clean($this->input->post('pro_price')),
					'pro_price_text' => $this->security->xss_clean($this->input->post('pro_price_text')),
					'pro_quantity' => $this->security->xss_clean($this->input->post('pro_quantity')),
					'pro_expired_date' => $this->security->xss_clean($this->input->post('pro_expired')),
					'pro_discount_amount' => $this->security->xss_clean($this->input->post('pro_discount_amount')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'pro_description' => $this->security->xss_clean($this->input->post('pro_description')),
					'pro_discount_type' => $this->security->xss_clean($this->input->post('pro_discount_type')),
					'pro_is_deal' => $this->security->xss_clean($this->input->post('pro_is_deal')),
					'pro_is_promotion' => $this->security->xss_clean($this->input->post('pro_is_promotion')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'pro_image_name' => $newfilename1,
					'pro_surprise_marked' => $this->security->xss_clean($this->input->post('pro_surprise_marked')),
				

				);
				
				if($id = $this->Product_model->addProduct($data_to_store)){
						/* Files uploading */
					//echo $this->input->post('tmpuniquepath');
						$filepath = getcwd()."/upload/files/".$this->input->post('tmpuniquepath');
						$new_filepath = getcwd()."/upload/files/".$id;
						if(is_dir($filepath)){
							//echo $filepath ;
							rename($filepath, $new_filepath);

							// Save Image Path to DB
							$folder_path = getcwd()."/upload/files/".$id.'/';
							$url = 'upload/files/'.$id.'/';
							
							if (is_dir($folder_path)) {
								
							    $dir = opendir($folder_path);
							    $list = array();

							   while($file = readdir($dir)){
							        if ($file != '.' and $file != '..'){
							            // add the filename, to be sure not to
							            // overwrite a array key
							            if(is_file($folder_path . $file)){
							            	$data= array(
												'pro_id' => $id,
												'pro_img_name' => $url.$file,
											);
							    			$this->db->insert('product_image', $data);
							            }
							        }
							    }
							    closedir($dir);
							}
							// End Save Image Path to DB
						}
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				redirect('product/add');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/product/add',$data);
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
			redirect('product');
		}

		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('pro_name', ' Name', 'trim|required');
			$this->form_validation->set_rules('pro_price', ' Price', 'trim|required');
			$this->form_validation->set_rules('pro_quantity', ' Quantity', 'trim|numeric|required');
			
			$this->form_validation->set_rules('pro_discount_amount', ' Discount amount', 'trim|numeric|required');	
			$this->form_validation->set_rules('pro_description', ' Description', 'trim|required');	
			$this->form_validation->set_rules('customer_id', ' Customer', 'trim|numeric|required');	
			$this->form_validation->set_rules('tmpuniquepath', 'Image File Path ', 'trim|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
		
				 $data_to_store = array(
					'pro_title' => $this->security->xss_clean($this->input->post('pro_name')),
					'pro_price' => $this->security->xss_clean($this->input->post('pro_price')),
					'pro_price_text' => $this->security->xss_clean($this->input->post('pro_price_text')),
					'pro_quantity' => $this->security->xss_clean($this->input->post('pro_quantity')),
					'pro_expired_date' => $this->security->xss_clean($this->input->post('pro_expired')),
					'pro_discount_amount' => $this->security->xss_clean($this->input->post('pro_discount_amount')),
					'customer_id' => $this->security->xss_clean($this->input->post('customer_id')),
					'pro_description' => $this->security->xss_clean($this->input->post('pro_description')),
					'pro_discount_type' => $this->security->xss_clean($this->input->post('pro_discount_type')),
					'pro_is_deal' => $this->security->xss_clean($this->input->post('pro_is_deal')),
					'pro_is_promotion' => $this->security->xss_clean($this->input->post('pro_is_promotion')),
					'paid_ads_start_date' => $this->security->xss_clean($this->input->post('paid_ads_start_date')),
					'paid_ads_end_date' => $this->security->xss_clean($this->input->post('paid_ads_end_date')),
					'pro_surprise_marked' => $this->security->xss_clean($this->input->post('pro_surprise_marked')),
					'livestatus' => $this->input->post('livestatus')
				);
				
				if ($_FILES["pro_image"]['size'] >0) {	
				
				$base=getcwd();
				$base=str_replace('app_advertiser', 'app_liveads88', $base);
		
				 $targetPath = $base . '/uploads/product/';
				 $temp = explode(".", $_FILES["pro_image"]["name"]);
				 $newfilename1 = round(microtime(true)) . '.' . end($temp);
				 move_uploaded_file($_FILES["pro_image"]["tmp_name"], $targetPath.$newfilename1);
				 unlink($targetPath.$this->input->post('old_image'));
				$data_to_store['pro_image_name'] 	= 	$newfilename1;						 
				}	
		
				
				
				
				
				
				//if the insert has returned true then we show the flash message
				if($this->Product_model->updateProduct($id, $data_to_store) == TRUE){
					/* Files uploading */
								
								$filepath = getcwd()."/upload/files/".$id;
								if(is_dir($filepath)){
									// Save Image Path to DB
									$folder_path = getcwd()."/upload/files/".$id.'/'; //$_SERVER['DOCUMENT_ROOT'] . '/fr/pubvoyages/';
									$url = 'upload/files/'.$id.'/';
									if (is_dir($folder_path)) {
									    $dir = opendir($folder_path);
									    $list = array();
									    while($file = readdir($dir)){
									        if ($file != '.' and $file != '..'){
									            // add the filename, to be sure not to
									            // overwrite a array key
									            if(is_file($folder_path . $file)){
														//print_r($folder_path . $file);
													$this->db->select('*');
													$this->db->from('product_image');
													$this->db->where('pro_id',$id);
													$this->db->where('pro_img_name',$url.$file);
													$query = $this->db->get();
													$query->num_rows();
													if($query->num_rows() < 1){
														$data= array(
															'pro_id' => $id,
															'pro_img_name' => $url.$file,
													
														);
										    			$this->db->insert('product_image', $data);
													}
											
									            }
									        }
									    }
									    closedir($dir);
									}
									// End Save Image Path to DB
								}

					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				//redirect('product/update/'.$id.'');

			}//validation run

		}

		if($data['product'] = $this->Product_model->getProductById($id)){
			$this->load->view('admin/header');
			$navidata['navi']=$this->Advertiser_model->getNavi();
			$this->load->view('admin/sidebar', $navidata);
			$this->load->view('admin/product/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect("product");
		}
		//print_r($data);
		//load the view
		
	}
	
	function remove_imagepath(){
		if(isset($_GET['packageID']) && isset($_GET['filename'])){
			$id = $_GET['packageID'];
			$image_name = 'upload/files/'.$_GET['packageID'].'/'.$_GET['filename'];
			$this->db->where('pro_id',$id);
			$this->db->where('pro_img_name',$image_name);
			$this->db->delete('product_image');
			echo "Deleted Image Path";

		}
	}
	
	function imageupload(){
		$id = $this->uri->segment(3);
		if (!empty($_FILES)) {
		$targetPath = getcwd() . '/uploads/product/';			
		 $temp = explode(".", $_FILES["file"]["name"]);
		 $newfilename1 = round(microtime(true)) . '.' . end($temp);
		 move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath.$newfilename1);
		 unlink($targetPath.$_FILES["pro_image"]["name"]);			 
		 $this->Product_model->addProductImage($id, $img_name);
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