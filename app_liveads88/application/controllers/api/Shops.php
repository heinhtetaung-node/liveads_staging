<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is shop  
 * @author  EI
 *
 */
class Shops extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Shop_model');
		$this->lang->load('api', 'english');
    }
	
	
	
	/*
	* Api shop list
	* URL: api/shops/lists/format/json
	*{"user_id":"","keywords":"","category_id":""}
	*/
	function lists_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		
		if(trim($this->security->xss_clean($this->post('keywords')) != "")){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$keywords = "";
		}
		if(trim($this->security->xss_clean($this->post('category_id')) != "")){
			$category_id = trim($this->security->xss_clean($this->post('category_id')));
		}else{
			$category_id = "";
		}
		
		if($shoplist = $this->Shop_model->apiGetShop($keywords,$category_id)){
			//print_r($data);
			$response = array("status"=>array(
							"code"			=>200,
							"message"		=> $this->lang->line('api_pro_list_success') ,
															
					));
			$category = $this->Shop_model->apiGetCategory();
			if(count($category)>0){
				$response['status']['category'] = $category;
				
			}		
			foreach($shoplist as $data){
				if($user_id!=""){
					$status =  $this->Shop_model->apiCheckLike($user_id,$data->cu_id)? "true" : "false";
				}else{
					$status = null;
				}
				$targetPath = getcwd() . '/uploads/customer/';
				$hex_string="";
				$cu_image_name="";
				if(file_exists($targetPath.$data->cu_image_name)){
					$bin_string = file_get_contents($targetPath.$data->cu_image_name);
					$hex_string = base64_encode($bin_string);
					$cu_image_name = urlencode('/uploads/customer/'.$data->cu_image_name);
				}
				
				
				
				
				$response['status']['data'][] = array(
					"shop_id" => $data->cu_id,
					"shop_name" => $data->cu_name,
					"like_count" => $data->cu_like_count,
					"like_status" => $status,
					"shop_website" => $data->cu_website,
					"shop_img_url" => $cu_image_name,
					//"shop_image" => $hex_string,
				);
			}
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	
	
	/*
	* Api shop detail
	* URL: api/shops/detail/format/json
	*{"id":"","user_id":""}
	*/
	function detail_post(){
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),				
				);
			$user_id = trim($this->security->xss_clean($this->post('user_id')));
			$error_result = $this->_validateShopDetailrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($data = $this->Shop_model->apiGetShopDetail($data['id'])){
					$flyer = $this->Shop_model->apiGetShopFlyer($data->cu_id);
					$shop_album = $this->Shop_model->apiGetShopAlbum($data->cu_id);
					$shop_album_url = $this->Shop_model->apiGetShopAlbumURL($data->cu_id);
				    if($user_id!=""){
						$status =  $this->Shop_model->apiCheckLike($user_id,$data->cu_id)? "true" : "false";
					}else{
						$status = null;
					}
					
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
					$banner = $this->Shop_model->getBanner($data->cu_id);
					$banner_url = $this->Shop_model->getBannerURL($data->cu_id);
					

					$targetPath = getcwd() . '/uploads/customer/';
					$bin_string = file_get_contents($targetPath.$data->cu_image_name);
					$hex_string = base64_encode($bin_string);
					$response['status']['data'] = array(
						"shop_id" => $data->cu_id,
						"shop_name" => $data->cu_name,					
						"shop_description" => $data->cu_description,
						"shop_mobile" => $data->cu_mobile,
						"shop_email" => $data->cu_email,
						"shop_website" => $data->cu_website,
						"shop_address" => $data->cu_address,
						"shop_postal" => $data->cu_postal,
						"shop_branch" => $data->cu_branch,
						"shop_hour" => $data->cu_hour,
						"shop_lat" => $data->cu_lat,
						"shop_long" => $data->cu_long,
						"like_count" => $data->cu_like_count,
						"like_status" => $status,
						"flyer_id" => $flyer,
						"service_type" => $data->cu_service_type,
						"banner_url" => $banner_url,
// 						"banner" => $banner,
						"shop_album_url" => $shop_album_url,
//						"shop_album" => $shop_album,
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
	* Api flyer
	* URL: api/shops/flyer/format/json
	*{"id":"1","flyer_id":"30"}
	*/
	function flyer_post(){
	log_message('error', 'flyer');
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				'flyer_id' 		=> trim($this->security->xss_clean($this->post('flyer_id'))),
				);
			$error_result = $this->_validateShopFlyerrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($data = $this->Shop_model->apiGetFlyer($data['id'],$data['flyer_id'])){
					//print_r($flyer);
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
																													
							));
							
					$targetPath = getcwd() . '/';
					
					$hex_string="";
					$flyer_img_url="";
					if(file_exists($targetPath.$data->spf_name)){
						$bin_string = file_get_contents($targetPath.$data->spf_name);
						$hex_string = base64_encode($bin_string);
						$flyer_img_url = urlencode('/'.$data->spf_name);
					}
					
					
					
					$response['status']['data'] = array(
						"shop_id" => $data->cu_id,
						"flyer_img_url" => $flyer_img_url,					
						"flyer_image" => $hex_string,					
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
	function _validateShopDetailrequest($data){
		$error_list = array();

		if($data['id']==""){
			$error_list['id'] = "shop id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid shop id ID!";
		}
		return $error_list;
	}
	
	function _validateShopFlyerrequest($data){
		$error_list = array();
		
		if($data['id']==""){
			$error_list['id'] = "shop id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid shop id ID!";
		}
		
		if($data['flyer_id']==""){
			$error_list['flyer_id'] = "flyer id required!";
		}else if(!$this->_validatePositiveNumber($data['flyer_id'])){
			$error_list['flyer_id'] = "Invalid flyer id ID!";
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