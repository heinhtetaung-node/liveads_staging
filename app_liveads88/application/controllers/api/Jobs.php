<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is event system 
 * @author  EI
 *
 */
class Jobs extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Job_model');
		$this->lang->load('api', 'english');
    }
	
	/*
	* Api job list
	* URL: api/jobs/lists/format/json
	*{"user_id":"","keywords":""}
	*/
	function lists_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		
		if(trim($this->security->xss_clean($this->post('keywords')) != "")){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$keywords = "";
		}
		
		if($job_list = $this->Job_model->apiGetJob($keywords)){
			//print_r($data);
			$response = array("status"=>array(
							"code"			=>200,
							"message"		=> $this->lang->line('api_pro_list_success') ,
																				
					));
					
			$banner = $this->Job_model->getBanner();
			if(count($banner)>0){
				$response['status']['banner'] = $banner	;
			}	
			foreach($job_list as $data){
				if($user_id!=""){
					$status =  $this->Job_model->apiCheckLike($user_id,$data->jb_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				
				$logo_img_url ="";
				if($data->cu_logo_name!=""){
					if(file_exists(getcwd() . '/uploads/brand/'.$data->cu_logo_name)){
						$logo_img_url = urlencode('/uploads/brand/'.$data->cu_logo_name);
					}
				}
				
				$response['status']['data'][] = array(
					"jb_id" => $data->jb_id,
					"jb_name" => $data->jb_name,
					"jb_location" => $data->jb_location,
					"jb_email" => $data->jb_email,
					"jb_phone" => $data->jb_phone,
					"jb_salary" => $data->jb_salary,
					"jb_description" => $data->jb_description,
					"jb_created" => $data->jb_created,
					"like_count" => $data->jb_like_count,
					"like_status" => $status,
					"employer_name" => $data->cu_name,
					// "employer_email" => $data->cu_email,
// 					"employer_mobile" => $data->cu_mobile,
// 					"employer_postal" => $data->cu_postal,
// 					"employer_lat" => $data->cu_lat,
// 					"employer_long" => $data->cu_long,
// 					"employer_address" => $data->cu_address,
// 					"employer_logo" => $data->cu_logo,
					"logo_img_url" => $logo_img_url,
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	
	
	/*
	* Api job detail
	* URL: api/jobs/detail/format/json
	*{"id":"","user_id":""}
	*/
	function detail_post(){
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),				
				);
			$user_id = trim($this->security->xss_clean($this->post('user_id')));
			$error_result = $this->_validateJobDetailrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($data = $this->Job_model->apiGetJobDetail($data['id'])){
				    if($user_id!=""){
						$status =  $this->Job_model->apiCheckLike($user_id,$data->jb_id)? "true" : "false";
					}else{
						$status = null;
					}
					
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
																					
							));
					$targetPath = getcwd() . '/uploads/brand/';
					$hex_string="";
					$logo_img_url="";
					if($data->cu_logo_name!=""){
						if(file_exists($targetPath.$data->cu_logo_name)){
							$bin_string = file_get_contents($targetPath.$data->cu_logo_name);
							$hex_string = base64_encode($bin_string);
							$logo_img_url = urlencode('/uploads/brand/'.$data->cu_logo_name);
						}
					}
					
					$response['status']['data'] = array(
					"jb_id" => $data->jb_id,
					"jb_name" => $data->jb_name,
					"jb_location" => $data->jb_location,
					"jb_email" => $data->jb_email,
					"jb_phone" => $data->jb_phone,
					"jb_salary" => $data->jb_salary,
					"jb_description" => $data->jb_description,
					"jb_created" => $data->jb_created,
					"like_count" => $data->jb_like_count,
					"like_status" => $status,					
					"employer_name" => $data->cu_name,
					"employer_email" => $data->cu_email,
					"employer_mobile" => $data->cu_mobile,
					"employer_postal" => $data->cu_postal,
					"employer_lat" => $data->cu_lat,
					"employer_long" => $data->cu_long,
					"employer_address" => $data->cu_address,
					"logo_img_url" => $logo_img_url,
// 					"employer_logo" => $hex_string,
				);
					$this->response($response, 200); // 200 being the HTTP response code	
				}else{
					$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_cp_not_found') ));
					$this->response($response, 200);
				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 			
		}
	}
	
	/*
	* Api job apply
	* URL: api/jobs/apply/format/json
	*{"user_token":"318f8c3ec43b6dbe6fccfa8f6f8548a15d4b968368cf50fc8bf3becf94f26254","user_id":"21","id":"1"}
	*/
	function apply_post(){
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				);
			$error_result = $this->_validateApplyrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{				
				if($user_id = $this->User_model->check_token($data)){
										
					if($this->Job_model->apiJobApply($data)){
						//print_r($data);
						$response = array("status"=>array(
										"code"			=>200,
										"message"		=> "success" ,
														
								));
						$this->response($response, 200); // 200 being the HTTP response code	
					}else{
						$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_cp_error') ));
						$this->response($response, 200);
					}
				}else{
					$response =array("status"=> array("code"=>401,"message"=> $this->lang->line('api_invalid_token') ));
					$this->response($response, 200);
				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 			
		}
	}
	
	function _validateJobDetailrequest($data){
		$error_list = array();
		if($data['id']==""){
			$error_list['id'] = "job id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid job id ID!";
		}
		return $error_list;
	}
	
	function _validateEventDetailrequest($data){
		$error_list = array();
		
		if($data['token']==""){
			$error_list['token'] = "token required!";
		}else if(!$this->_validateCharacterAndNumber($data['token'])){
			$error_list['token'] = "Invalid token ID!";
		}
		
		if($data['ev_id']==""){
			$error_list['ev_id'] = "event id required!";
		}else if(!$this->_validatePositiveNumber($data['ev_id'])){
			$error_list['ev_id'] = "Invalid event id ID!";
		}
		return $error_list;
	}
	
	function _validateApplyrequest($data){
		$error_list = array();
		
		if($data['token']==""){
			$error_list['token'] = "token required!";
		}else if(!$this->_validateCharacterAndNumber($data['token'])){
			$error_list['token'] = "Invalid token ID!";
		}
		if($data['user_id']==""){
			$error_list['user_id'] = "user id required!";
		}else if(!$this->_validatePositiveNumber($data['user_id'])){
			$error_list['user_id'] = "Invalid user id ID!";
		}
		
		if($data['id']==""){
			$error_list['id'] = "coupon id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid coupon id ID!";
		}		

		

		return $error_list;
	}

	
	function _validatePositiveNumber($value){
		if (!preg_match('/^[0-9]+$/', $value)) {
			return false;
		} else {
			return true;
		}
	}
	function _validateCharacterAndNumber($value){
		if (!preg_match('/^[a-zA-Z0-9-]+$/', $value)) {
			return false;
		} else {
			return true;
		}
	}
}