<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is coupon system 
 * @author  EI
 *
 */
class Coupons extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Coupon_model');
		$this->lang->load('api', 'english');
		$this->load->library('encryption');
		//$this->checkExpireCoupon();
    }
	
	/*
	* Api coupon list
	* URL: api/coupons/lists/format/json
	*{"user_id":"","keywords":""}
	*/
	function lists_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		if(trim($this->security->xss_clean($this->post('keywords')) != "")){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$keywords = "";
		}
		if($coupon_list = $this->Coupon_model->apiGetCoupon($keywords)){
			//print_r($data);
			$response = array("status"=>array(
							"code"			=>200,
							"message"		=> $this->lang->line('api_cp_list_success') ,
														
					));
			$banner = $this->Coupon_model->getBanner();
			if(count($banner)>0){
				$response['status']['banner'] = $banner	;
				
			}			
			foreach($coupon_list as $data){
				if($user_id!=""){
					$status =  $this->Coupon_model->apiCheckLike($user_id,$data->cp_id)? "true" : "false";
				}else{
					$status = null;
				}
				$targetPath = getcwd() . '/uploads/coupon/';
				
				$hex_string="";
				$cp_img_url="";
				if(file_exists($targetPath.$data->cp_img_name)){
					$bin_string = file_get_contents($targetPath.$data->cp_img_name);
					$hex_string = base64_encode($bin_string);
					$cp_img_url = urlencode('/uploads/coupon/'.$data->cp_img_name);
				}
				
				
				
				$response['status']['data'][] = array(
					"cp_id" => $data->cp_id,
					"like_count" => $data->cp_like_count,
					"like_status" => $status,
					"cp_img_url" => $cp_img_url,
// 					"cp_img_base64" => $hex_string,
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_cp_not_found') ));
			$this->response($response, 200);
		}
	}
	
	/*
	* Api coupon detail
	* URL: api/coupons/detail/format/json
	*{"user_id":"","id":""}
	*/
	function detail_post(){
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				);
			$user_id = trim($this->security->xss_clean($this->post('user_id')));
			$error_result = $this->_validateCouponDetailrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				$this->Coupon_model->apiIncreaseCouponViewCount($data['id']);
				if($data = $this->Coupon_model->apiGetCouponDetail($data['id'])){
					if($user_id!=""){
						$status =  $this->Coupon_model->apiCheckLike($user_id,$data->cp_id)? "true" : "false";
					}else{
						$status = null;
					}
					
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
															
							));
					$targetPath = getcwd() . '/uploads/coupon/';
					$hex_string="";
					$cp_img_url="";
					if(file_exists($targetPath.$data->cp_img_name)){
						$bin_string = file_get_contents($targetPath.$data->cp_img_name);
						$hex_string = base64_encode($bin_string);
						$cp_img_url = urlencode('/uploads/coupon/'.$data->cp_img_name);
					}
					
					$response['status']['data'] = array(
						"cp_id" => $data->cp_id,
						"cp_name"=>$data->cp_name,
						"cp_description" => $data->cp_description,
						"like_status" => $status,						
						"cp_like_count" => $data->cp_like_count,
						"cp_valid_to" => $data->cp_valid_to,
						"cp_status" =>  ($data->cp_quantity > 0)? "limited coupon" : "unlimited coupon",
						"cp_img_url" => $cp_img_url,
// 						"cp_img_base64" => $hex_string,	
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
	* Api redeem
	* URL: api/coupons/redeem/format/json
	*{"user_token":"","user_id":"","id":"","code":""}
	*/
	function redeem_post(){
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				'code' 		=> trim($this->security->xss_clean($this->post('code'))),
				);
			$error_result = $this->_validateRedeemrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{				
				if($user_id = $this->User_model->check_token($data)){
					if(!$this->Coupon_model->apicheckCoupon($data['id'],$data['code'])){
						$response = array("status"=>array("code"=>407,"message"=> "Invalid coupon code" ));
						$this->response($response, 200);
					}
					
					if($this->Coupon_model->apicheckUserUsage($data['user_id'],$data['id'])){
					$response = array("status"=>array("code"=>406,"message"=> "User already use this coupon" ));
					$this->response($response, 200);
					}				
					
					
					if($this->Coupon_model->apiAddCoupon($data)){
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
	
	function checkExpireCoupon(){
		$this->Coupon_model->checkExpiredCoupon();
	}
	
	
	function _validateCouponDetailrequest($data){
		$error_list = array();

		if($data['id']==""){
			$error_list['id'] = "coupon id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid coupon id ID!";
		}
		return $error_list;
	}
	
	function _validateRedeemrequest($data){
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
		
		if($data['code']==""){
			$error_list['code'] = "coupon code required!";
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