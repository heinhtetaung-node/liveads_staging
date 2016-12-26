<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is Products promotion /flash deal 
 * @author  EI
 *
 */
class Products extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Product_model');
		$this->lang->load('api', 'english');
		//$this->checkExpirePromotion();
    }
	
	/*
	* Api flashdeal list
	* URL: api/products/flashdeal/format/json
	*{"user_id":"","keywords":"aa"} 
	*/
	function flashdeal_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		/*
		$mood	 = trim($this->security->xss_clean($this->post('mood')));
		
		if($mood != ""){
			if($mood == "no_clue"){
		 		//No Clue: sort by the most number of likes
				$order = " ORDER BY product.pro_like_count DESC, sort_pro_id DESC, product.pro_created DESC ";	
			}else if($mood == "feeling_great"){
				//Feeling Great! : sort by the most viewed items
				$order = " ORDER BY product.`pro_total_viewer` DESC, sort_pro_id DESC, product.pro_created DESC ";
			}else if($mood == "surprise"){
				//Surprise Me : sort by ‘marked’ manually by Admin.
				$order = " ORDER BY product.`pro_surprise_marked` DESC, sort_pro_id DESC, product.pro_created DESC ";
			}else {
				$order = " ORDER BY sort_pro_id DESC, product.pro_created DESC ";
			}
		}else{
			$order = " ORDER BY sort_pro_id DESC, product.pro_created DESC ";
		}
		*/
		
		$order = " ORDER BY sort_pro_id DESC, product.pro_created DESC ";
		
		if($product_list = $this->Product_model->apiGetFlashDealList($order)){
			//print_r($data);
			$news = $this->Product_model->apiGetFlashNews();
			$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
			//$response['status']['active_user'] = rand(5, 1000) ;
		   $active_user_data = $this->Product_model->apiGetActiveUser();
		   $response['status']['start_number'] = $active_user_data['start_number'];
		   $response['status']['end_number'] = $active_user_data['end_number'];
		   $response['status']['active_user'] = $active_user_data['active_user'];
		   
			$response['status']['flash_news'] = $news	;
			$banner_first = $this->Product_model->getHomeTopBanner();
			
			if(count($banner_first)>0){
				$response['status']['banner_first'] = $banner_first	;
				
			}
			
			
			$banner_second = $this->Product_model->getHomeBottomBanner();
			if(count($banner_second)>0){
				$response['status']['banner_second'] = $banner_second	;
				
			}
			
			
			
			$brands = $this->Product_model->apiGetBrands();
			
			if(count($brands)>0){
				$response['status']['brands'] = $brands	;
			
			}
			foreach($product_list as $data){
				if($user_id!=""){
					$status =  $this->Product_model->apiCheckLike($user_id,$data->pro_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				$targetPath = getcwd() . '/uploads/product/';
				$hex_string="";
				$pro_img_url="";
				if(file_exists($targetPath.$data->pro_image_name)){
					$bin_string = file_get_contents($targetPath.$data->pro_image_name);
					$hex_string = base64_encode($bin_string);
					$pro_img_url = urlencode('/uploads/product/'.$data->pro_image_name);
				}
				
				$response['status']['data'][] = array(
					"pro_id" => $data->pro_id,
					"pro_price" => $data->pro_price,	
						"pro_price_text" => $data->pro_price_text,				
					"pro_discount_type" => $data->pro_discount_type,
					"pro_discount_amount" => $data->pro_discount_amount,
					"pro_description" => $data->pro_description,
					"like_count" => $data->pro_like_count,
					"like_status" => $status,
					"cu_email" => $data->cu_email,
					"pro_img_url" => $pro_img_url,
// 					"pro_image_base64" => $hex_string,
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	
	
	/*
	* Api protmotion list
	* URL: api/products/promotion/format/json
	*{"user_id":"","shop_id":""}
	*/
	function promotion_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		if(trim($this->security->xss_clean($this->post('keywords')) != "")){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$keywords = "";
		}
		
		
		
		if($product_list = $this->Product_model->apiGetPromotionList($keywords)){
			//print_r($data);
			$banner = $this->Product_model->getPromotionBanner();
			$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
			if(count($banner)>0){
				$response['status']['banner'] = $banner	;
				
			}
			//print_r($banner);
			foreach($product_list as $data){
				if($user_id!=""){
					$status =  $this->Product_model->apiCheckLike($user_id,$data->pro_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				$targetPath = getcwd() . '/uploads/product/';
				$hex_string="";
				$pro_img_url="";
				if(file_exists($targetPath.$data->pro_image_name)){
					$bin_string = file_get_contents($targetPath.$data->pro_image_name);
					$hex_string = base64_encode($bin_string);
					$pro_img_url = urlencode('/uploads/product/'.$data->pro_image_name);
				}
				
				$response['status']['data'][] = array(
					"pro_id" => $data->pro_id,
					"pro_name" => $data->pro_title,		
					"pro_price" => $data->pro_price,
					"pro_price_text" => $data->pro_price_text,
					"pro_discount_type" => $data->pro_discount_type,
					"pro_discount_amount" => $data->pro_discount_amount,
					"pro_quantity" => $data->pro_quantity,
					"pro_description" => $data->pro_description,
					"like_count" => $data->pro_like_count,
					"like_status" => $status,
					"company_name" => $data->cu_name,
					"pro_img_url" => $pro_img_url,
// 					"pro_image_base64" => $hex_string,
					
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	
	
	/*
	* Api shoppromotion list
	* URL: api/products/shoppromotion/format/json
	*{"shop_id":""}
	*/
	function shoppromotion_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
				
		if(trim($this->security->xss_clean($this->post('id')) != "")){
			$shop_id = trim($this->security->xss_clean($this->post('id')));
		}else{
			$shop_id = "";
		}
		
		if($product_list = $this->Product_model->apiGetShopPromotionList($shop_id)){
			//print_r($data);
			
			$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
			
			//print_r($banner);
			foreach($product_list as $data){
				if($user_id!=""){
					$status =  $this->Product_model->apiCheckLike($user_id,$data->pro_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				$targetPath = getcwd() . '/uploads/product/';
				$hex_string="";
				$pro_img_url="";
				if(file_exists($targetPath.$data->pro_image_name)){
					$bin_string = file_get_contents($targetPath.$data->pro_image_name);
					$hex_string = base64_encode($bin_string);
					$pro_img_url = urlencode('/uploads/product/'.$data->pro_image_name);
				}
				
				$response['status']['data'][] = array(
					"pro_id" => $data->pro_id,
					"pro_name" => $data->pro_title,		
					"pro_price" => $data->pro_price,
						"pro_price_text" => $data->pro_price_text,
					"pro_discount_type" => $data->pro_discount_type,
					"pro_discount_amount" => $data->pro_discount_amount,
					"pro_quantity" => $data->pro_quantity,
					"pro_description" => strip_tags($data->pro_description),
					"like_count" => $data->pro_like_count,
					"like_status" => $status,
					"company_name" => $data->cu_name,
					"pro_img_url" => $pro_img_url,
// 					"pro_image_base64" => $hex_string,
					
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	/*
	* Api promotion detail
	* URL: api/products/detail/format/json
	*{"user_id":"","id":""}
	*/
	function detail_post(){
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				);
			$user_id = trim($this->security->xss_clean($this->post('user_id')));
			$error_result = $this->_validatePromotionDetailrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				$this->Product_model->apiIncreaseProductViewCount($data['id']);
				if($data = $this->Product_model->apiGetProductDetail($data['id'])){
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
					//print_r($data);
					 if($user_id!=""){
						$status =  $this->Product_model->apiCheckLike($user_id,$data->pro_id)? "true" : "false";
					}else{
						$status = null;
					}
					$pro_img = $this->Product_model->apiProImage($data->pro_id);						
					$pro_img_url = $this->Product_model->apiProImageURL($data->pro_id);						
					
					$product_status = "";
					if($data->pro_is_deal == 1 & $data->pro_is_promotion == 1){
						$product_status = "both";
					}
					if($data->pro_is_deal == 1 & $data->pro_is_promotion == 0){
						$product_status = "deal";
					}
					if($data->pro_is_deal == 0 & $data->pro_is_promotion == 1){
						$product_status = "promotion";
					}
					$response['status']['data'] = array(
						"pro_id" => $data->pro_id,
						"pro_price" => $data->pro_price,
							"pro_price_text" => $data->pro_price_text,
						"pro_name" => $data->pro_title,								
						"pro_discount_type" => $data->pro_discount_type,
						"pro_discount_amount" => $data->pro_discount_amount,
						"pro_quantity" => $data->pro_quantity,
						"pro_description" => strip_tags($data->pro_description),
						"like_count" => $data->pro_like_count,
						"like_status" => $status,
						"shop_id" => $data->customer_id,
						"product_status" => $product_status,
						"cu_email" => $data->cu_email,
						"image_url" => $pro_img_url,
// 						"image" => $pro_img,
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
	* Api flash get api(get it now)
	* URL: api/products/productget/format/json
	*{"user_token":"","user_id":"","id":"","qty":""}
	*/
	function productget_post(){
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),
				'qty' 		=> trim($this->security->xss_clean($this->post('qty'))),
				);
			$error_result = $this->_validateProductgetrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{				
				if($user_id = $this->User_model->check_token($data)){
					if($this->Product_model->apiAddGetItNow($data)){
						//print_r($data);
						$response = array("status"=>array(
										"code"			=>200,
										"message"		=> "success" ,
														
								));
						$this->response($response, 200); // 200 being the HTTP response code	
					}else{
						$response =array("status"=> array("code"=>203,"message"=> "fail" ));
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
	
	function _validateProductgetrequest($data){
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

		if($data['qty']==""){
			$error_list['qty'] = "quantity required!";
		}else if(!$this->_validatePositiveNumber($data['qty'])){
			$error_list['qty'] = "Invalid quantity";
		}			

		return $error_list;
	}
	function _validatePromotionDetailrequest($data){
		$error_list = array();
		
		if($data['id']==""){
			$error_list['id'] = "promotion id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid promotion id ID!";
		}
		return $error_list;
	}
	
	function checkExpirePromotion(){
		$this->Product_model->checkExpiredPromotion();
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