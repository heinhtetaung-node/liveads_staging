<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * category Module
  *
  * This module is for category function.
  *	@EI EI 
  * @return void
  */
class Adscomponent extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Adscomponent_Model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	 /**
    * Add about category list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/adscomponent/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about brand datatable
    * @Ei
    */
	public function adscomponent_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'adsname',	
			);	
			
		$sql='
		SELECT a.adscomponent_id, a.adsname, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id WHERE 1=1';
		
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND a.adsname LIKE '%".$requestData['search']['value']."%' ";    
		}
		
		$sql=$sql." GROUP BY a.adscomponent_id ";
		
		$sql.=" ORDER BY ".$columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
		
		//echo $recordsFiltered;
		$rowCountSql = "SELECT COUNT(*) as rowcount FROM adscomponent";
		if( !empty($requestData['search']['value']) ) {  
			$rowCountSql.=" WHERE adsname LIKE '%".$requestData['search']['value']."%'";    
		}
		$resTotalLength = $this->db->query($rowCountSql);
		
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal; 
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			if($row['adscomponent_id']!=NULL){
				$tmpentry = array();
				$tmpentry[] = $row['adsname'];
				$tmpentry[] = $row['price_options'];
				$tmpentry[] = "<a href='".base_url()."adscomponent/update/".$row['adscomponent_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."adscomponent/deleteAds/".$row['adscomponent_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

				$result_array[] = $tmpentry;
			}
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
			$this->form_validation->set_rules('adsname', 'Name', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('price[]', 'Price', 'trim|required');
			$this->form_validation->set_rules('price_unit[]', 'Price Unit', 'trim|required');
			$this->form_validation->set_rules('days[]', 'Days', 'trim|integer|required');
			if (empty($_FILES['previewphoto_m']['name']))
			{
				$this->form_validation->set_rules('previewphoto_m', 'Preview Photo', 'required');
			}
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/adscomponent/add');
				$this->load->view('admin/footer');
			}else{	
			
				$targetPath = getcwd() . '/uploads/adscomponent/';			 
				$temp = explode(".", $_FILES["previewphoto_m"]["name"]);
				$newfilename1 = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES["previewphoto_m"]["tmp_name"], $targetPath.$newfilename1);				 
				$data_to_store = array(
					'adsname' 		 => $this->security->xss_clean($this->input->post('adsname')),
					'description' 		 => $this->security->xss_clean($this->input->post('description')),
					'previewphoto_m' => $newfilename1
				);
				$id=$this->Adscomponent_Model->addAds($data_to_store);
				//$id=1;
				if($id!=""){
					
					$price=$this->security->xss_clean($this->input->post('price'));
					$price_unit=$this->security->xss_clean($this->input->post('price_unit'));
					$days=$this->security->xss_clean($this->input->post('days'));
					
					for($i=0; $i<sizeof($price); $i++){
						//echo $price[$i]." ".$price_unit[$i]." FOR ".$days[$i]." DAYS ";
						$data_price = array(
							'adscomponent_id' => $id,
							'price' => $price[$i],
							'price_unit' => $price_unit[$i],
							'days' => $days[$i]
						);
						$res=$this->Adscomponent_Model->addAdsPrice($data_price);
					}
															
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
					
					$this->session->set_flashdata('previewphoto_m', $newfilename1);
				}
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/adscomponent/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/adscomponent/add');
			$this->load->view('admin/footer');
		}
	}
	
	
	
	/**
	  * update banner
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('adsname', 'Name', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('price[]', 'Price', 'trim|required');
			$this->form_validation->set_rules('price_unit[]', 'Price Unit', 'trim|required');
			$this->form_validation->set_rules('days[]', 'Days', 'trim|integer|required');
			
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 

			$id=$this->security->xss_clean($this->input->post('adscomponent_id'));
			
			if ($this->form_validation->run())
			{    
				//echo $_FILES["previewphoto_m"]["name"]; echo "ok"; exit;
				
				if($_FILES["previewphoto_m"]["name"]!=""){
					$targetPath = getcwd() . '/uploads/adscomponent/';			 
					$temp = explode(".", $_FILES["previewphoto_m"]["name"]);
					$newfilename1 = round(microtime(true)) . '.' . end($temp);
					move_uploaded_file($_FILES["previewphoto_m"]["tmp_name"], $targetPath.$newfilename1);				 
					$data_to_update = array(
						'adsname' 		 => $this->security->xss_clean($this->input->post('adsname')),
						'description' 		 => $this->security->xss_clean($this->input->post('description')),
						'previewphoto_m' => $newfilename1
					);
					
					unlink(getcwd().'/uploads/adscomponent/'.$this->security->xss_clean($this->input->post('old_previewphoto_m')));
					
				}else{
					$data_to_update = array(
						'adsname' => $this->security->xss_clean($this->input->post('adsname')),
						'description' => $this->security->xss_clean($this->input->post('description'))
					);
				}
				
				$res=$this->Adscomponent_Model->updateAds($data_to_update, $id);
				
				$price=$this->security->xss_clean($this->input->post('price'));
				$price_id=$this->security->xss_clean($this->input->post('price_id'));
				$price_unit=$this->security->xss_clean($this->input->post('price_unit'));
				$days=$this->security->xss_clean($this->input->post('days'));
				
				for($i=0; $i<sizeof($price); $i++){
					//echo $price[$i]." ".$price_unit[$i]." FOR ".$days[$i]." DAYS ";
					
					if($price_id[$i]==""){
						$data_price = array(
							'adscomponent_id' => $id,
							'price' => $price[$i],
							'price_unit' => $price_unit[$i],
							'days' => $days[$i]
						);
						$res=$this->Adscomponent_Model->addAdsPrice($data_price);
					}
					
				}
				
				$extprice = $this->Adscomponent_Model->getAdsPriceById($id);		
				$i=0;
				foreach($extprice as $p){
					if($p['price_id']==$price_id[$i]){
						//echo "exit ".$p['price']; echo "<br>";
						if($p['price']==$price[$i] && $p['price_unit']==$price_unit[$i] && $p['days']==$days[$i]){
						
						}else{
							$data_price_update = array(
								'price' => $price[$i],
								'price_unit' => $price_unit[$i],
								'days' => $days[$i]
							);
							$res=$this->Adscomponent_Model->updateAdsPrice($data_price_update, $price_id[$i]);
						}
					}else{
						//echo $price_id[$i]; 
						$price_id = $price_id[$i];
						//echo "<br>";
						//echo trim($price_id,"toremove");
						$price_id = trim($price_id,"_toremove");
						$res=$this->Adscomponent_Model->deleteAdsPrice($price_id);
					}
					$i++;
				}
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Data is updated.</div>');
					
				redirect('adscomponent/update/'.$id.'');								
				
			}

		}

		if($data['ads'] = $this->Adscomponent_Model->getAdsById($id)){	
			$data['adsprice'] = $this->Adscomponent_Model->getAdsPriceById($data['ads']->adscomponent_id);		
			//load the view
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/adscomponent/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('adscomponent');
		}
	}
	
	/**
    * delete banner
    * @Ei
    */
	function deleteAds()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Adscomponent_Model->deleteAds($id);
       
        redirect('adscomponent');
    }

}