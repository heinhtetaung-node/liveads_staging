<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is Products promotion /flash deal 
 * @author  EI
 *
 */
class Home extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Home_model');
		$this->load->model('Product_model');
		$this->load->model('Shop_model');
		$this->load->model('Coupon_model');
		$this->load->model('Event_model');
		$this->load->model('Job_model');
		$this->lang->load('api', 'english');
		//$this->checkExpirePromotion();
    }
	
	function search_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		
		
		if(trim($this->security->xss_clean($this->post('keywords'))) != ""){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_keywords_not_found') ));
			$this->response($response, 200);
		}
		
		$limit = ' LIMIT 10';
		
		$flashdeal_list = $this->Home_model->apiSearchFlashDealList($keywords, $limit);
		$promotion_list = $this->Home_model->apiSearchPromotionList($keywords, $limit);
		
		$shop_list 		= $this->Home_model->apiSearchShopList($keywords, $limit);
		$coupon_list	= $this->Home_model->apiSearchCouponList($keywords, $limit);
		$event_list 	= $this->Home_model->apiSearchEventList($keywords, $limit);
		$job_list 		= $this->Home_model->apiSearchJobList($keywords, $limit);
		
			$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
							
			if($flashdeal_list){
				foreach($flashdeal_list as $data){
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
					
					
					
					$response['status']['flashdeals'][] = array(
						"pro_id" => $data->pro_id,
						"pro_name" => $data->pro_title,
						"pro_price" => $data->pro_price,					
						"pro_discount_type" => $data->pro_discount_type,
						"pro_discount_amount" => $data->pro_discount_amount,
						"pro_description" => strip_tags($data->pro_description),
						"like_count" => $data->pro_like_count,
						"like_status" => $status,
						"cu_email" => $data->cu_email,
						"pro_img_url" => $pro_img_url,
// 						"pro_image_base64" => $hex_string,
					);
				}
			}else{
				$response['status']['flashdeals'] = array(); 
			}
			
			
			if($promotion_list){
				foreach($promotion_list as $data){
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
					
					$response['status']['promotions'][] = array(
						"pro_id" => $data->pro_id,
						"pro_name" => $data->pro_title,		
						"pro_price" => $data->pro_price,
						"pro_discount_type" => $data->pro_discount_type,
						"pro_discount_amount" => $data->pro_discount_amount,
						"pro_quantity" => $data->pro_quantity,
						"pro_description" => strip_tags($data->pro_description),
						"like_count" => $data->pro_like_count,
						"like_status" => $status,
						"company_name" => $data->cu_name,
						"pro_img_url" => $pro_img_url,
// 						"pro_image_base64" => $hex_string,
						
					);
				}
			}else{
				$response['status']['promotions'] = array(); 
			}
			
			
		if($shop_list) {	
			foreach($shop_list as $data){
				if($user_id!=""){
					$status =  $this->Shop_model->apiCheckLike($user_id,$data->cu_id)? "true" : "false";
				}else{
					$status = null;
				}
				$targetPath = getcwd() . '/uploads/customer/';
				$hex_string="";
				$shop_img_url="";
				if(file_exists($targetPath.$data->cu_image_name)){
					$bin_string = file_get_contents($targetPath.$data->cu_image_name);
					$hex_string = base64_encode($bin_string);
					$shop_img_url = urlencode('/uploads/customer/'.$data->cu_image_name);
				}
				
				
				$response['status']['shops'][] = array(
					"shop_id" => $data->cu_id,
					"shop_name" => $data->cu_name,
					"shop_description" => strip_tags($data->cu_description),
					"like_count" => $data->cu_like_count,
					"like_status" => $status,
					"shop_img_url" => $shop_img_url,
// 					"shop_image" => $hex_string,
				);
			}
		}else{
			$response['status']['shops'] = array(); 
		}
		
		if($coupon_list){
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
				
				
				$response['status']['coupons'][] = array(
					"cp_id" => $data->cp_id,
					"like_count" => $data->cp_like_count,
					"cp_name" => $data->cp_name,
					"cp_description" => strip_tags($data->cp_description),
					"like_status" => $status,
					"cp_img_url" => $cp_img_url,
// 					"cp_img_base64" => $hex_string,
				);
			}
		}else{
			$response['status']['coupons'] = array(); 
		}
		
		
		if($event_list){
			foreach($event_list as $data){
				if($user_id!=""){
					$status =  $this->Event_model->apiCheckLike($user_id,$data->ev_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				$targetPath = getcwd() . '/uploads/event/';
				$hex_string="";
				$cp_img_url="";
				if(file_exists($targetPath.$data->ev_img_name)){
					$bin_string = file_get_contents($targetPath.$data->ev_img_name);
					$hex_string = base64_encode($bin_string);
					$ev_img_name =urlencode('/uploads/event/'.$data->ev_img_name);
				}
				
				$response['status']['events'][] = array(
					"ev_id" => $data->ev_id,
					"ev_title" => $data->ev_title,
					"ev_location" => $data->ev_location,
					"ev_description" => strip_tags($data->ev_description),
					"ev_date" => $data->ev_date,
					"like_count" => $data->ev_like_count,
					"like_status" => $status,
					"ev_img_url" => $ev_img_name,
// 					"ev_img_base64" => $hex_string,
				);
			}
		}else{
			$response['status']['events'] = array();
		}
			
		if($job_list){
			
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
				
				
				$response['status']['jobs'][] = array(
					"jb_id" => $data->jb_id,
					"jb_name" => $data->jb_name,
					"jb_location" => $data->jb_location,
					"jb_email" => $data->jb_email,
					"jb_phone" => $data->jb_phone,
					"jb_salary" => $data->jb_salary,
					"jb_description" => strip_tags($data->jb_description),
					"jb_created" => $data->jb_created,
					"like_count" => $data->jb_like_count,
					"like_status" => $status,
// 					"employer_logo" => $data->cu_logo,
					"logo_img_url" => $logo_img_url,
				);
			}
			
		} else{
			$response['status']['jobs'] = array();
		}
			
		$this->response($response, 200); // 200 being the HTTP response code	
		
	}
	
	
	
	
	function guidefinder_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		$mood	 = trim($this->security->xss_clean($this->post('mood')));
		$limit = ' LIMIT 20';
		
		if($mood != ""){
			if($mood == "no_clue"){
		 		//No Clue: sort by the most number of likes
				$p_order = " ORDER BY product.pro_like_count DESC, sort_pro_id DESC, product.pro_created DESC ";	
				$c_order = " ORDER BY cp.cp_like_count DESC, sort_cp_id DESC, cp.cp_created DESC ";	
			
			}else if($mood == "feeling_great"){
				//Feeling Great! : sort by the most viewed items
				$p_order = " ORDER BY product.`pro_total_viewer` DESC, sort_pro_id DESC, product.pro_created DESC ";
				$c_order = " ORDER BY cp.cp_total_viewer DESC, sort_cp_id DESC, cp.cp_created DESC ";
			}else if($mood == "surprise"){
				//Surprise Me : sort by ‘marked’ manually by Admin.
				$p_order = " ORDER BY product.`pro_surprise_marked` DESC, sort_pro_id DESC, product.pro_created DESC ";
				$c_order = " ORDER BY cp.`cp_surprise_marked` DESC, sort_cp_id DESC, cp.cp_created DESC ";
			}else {
				$p_order = " ORDER BY sort_pro_id DESC, product.pro_created DESC ";
				$c_order = " ORDER BY sort_cp_id DESC, cp.cp_created DESC ";
			}
		}else{
			$p_order = " ORDER BY sort_pro_id DESC, product.pro_created DESC ";
			$c_order = " ORDER BY sort_cp_id DESC, cp.cp_created DESC ";
		}
		
		$promotion_list = $this->Home_model->apiPromotionProductGuideFinderList($p_order, $limit);
		$coupon_list  = $this->Home_model->apiCouponGuideFinderList($c_order, $limit);
		
			$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									
							));
			
			if($promotion_list){
				foreach($promotion_list as $data){
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
					
					
					
					
					$response['status']['products'][] = array(
						"pro_id" => $data->pro_id,
						"pro_name" => $data->pro_title,		
						"pro_price" => $data->pro_price,
						"pro_discount_type" => $data->pro_discount_type,
						"pro_discount_amount" => $data->pro_discount_amount,
						"pro_quantity" => $data->pro_quantity,
						"pro_description" => strip_tags($data->pro_description),
						"like_count" => $data->pro_like_count,
						"like_status" => $status,
						"company_name" => $data->cu_name,
						"pro_img_url" => $pro_img_url,
// 						"pro_image_base64" => $hex_string,
						
					);
				}
			}else{
				$response['status']['products'] = array(); 
			}
			
		
		if($coupon_list){
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
				
				$response['status']['coupons'][] = array(
					"cp_id" => $data->cp_id,
					"like_count" => $data->cp_like_count,
					"like_status" => $status,
					"cp_img_url" => $cp_img_url,
// 					"cp_img_base64" => $hex_string,
				);
			}
		}else{
			$response['status']['coupons'] = array(); 
		}
		
		$this->response($response, 200); // 200 being the HTTP response code	
	}
	
}