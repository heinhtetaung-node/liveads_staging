<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is event system 
 * @author  EI
 *
 */
class Events extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->model('Event_model');
		$this->lang->load('api', 'english');
		//$this->checkExpireEvent();
    }
	
	/*
	* Api event list
	* URL: api/events/lists/format/json
	*{"user_id":"","keywords":""}
	*/
	function lists_post(){
		$user_id = trim($this->security->xss_clean($this->post('user_id')));
		
		if(trim($this->security->xss_clean($this->post('keywords')) != "")){
			$keywords = trim($this->security->xss_clean($this->post('keywords')));
		}else{
			$keywords = "";
		}
		
		
		if($event_list = $this->Event_model->apiGetEvent($keywords)){
			//print_r($data);
			$response = array("status"=>array(
							"code"			=>200,
							"message"		=> $this->lang->line('api_pro_list_success') ,
																				
					));
			$banner = $this->Event_model->getBanner();
			if(count($banner)>0){
				$response['status']['banner'] = $banner	;
			}		
			foreach($event_list as $data){
				if($user_id!=""){
					$status =  $this->Event_model->apiCheckLike($user_id,$data->ev_id)? "true" : "false";
				}else{
					$status = null;
				}
				
				$targetPath = getcwd() . '/uploads/event/';
				$hex_string="";
				$ev_img_url="";
				if(file_exists($targetPath.$data->ev_img_name)){
					$bin_string = file_get_contents($targetPath.$data->ev_img_name);
					$hex_string = base64_encode($bin_string);
					$ev_img_url = urlencode('/uploads/event/'.$data->ev_img_name);
				}
				
				$response['status']['data'][] = array(
					"ev_id" => $data->ev_id,
					"ev_title" => $data->ev_title,
					"ev_location" => $data->ev_location,
					"ev_description" => $data->ev_description,
					"ev_date" => $data->ev_date,
					"like_count" => $data->ev_like_count,
					"like_status" => $status,
					"ev_img_url" => $ev_img_url,
// 					"ev_img_base64" => $hex_string,
				);
			}
			
			$this->response($response, 200); // 200 being the HTTP response code
		}else{
			$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_pro_not_found') ));
			$this->response($response, 200);
		}
	}
	
	/*
	* Api event detail
	* URL: api/events/detail/format/json
	*{"id":"","user_id":""}
	*/
	function detail_post(){
		if($this->post()){
			$data = array(
				'id' 		=> trim($this->security->xss_clean($this->post('id'))),				
				);
			$user_id = trim($this->security->xss_clean($this->post('user_id')));
			$error_result = $this->_validateEventDetailrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($data = $this->Event_model->apiGetEventDetail($data['id'])){
				    if($user_id!=""){
						$data->like_status =  $this->Event_model->apiCheckLike($user_id,$data->ev_id)? "true" : "false";
					}else{
						$data->like_status = null;
					}
					$targetPath = getcwd() . '/uploads/event/';
					
					$hex_string="";
					$ev_img_url="";
					if(file_exists($targetPath.$data->ev_img_base64)){
						$bin_string = file_get_contents($targetPath.$data->ev_img_base64);
						$hex_string = base64_encode($bin_string);
						$ev_img_url = urlencode('/uploads/event/'.$data->ev_img_base64);
					}
					
					//$data->ev_img_base64 = $hex_string;
					$data->ev_img_base64 = '';
					$data->ev_description = strip_tags($data->ev_description);
					$data->ev_img_url 	= $ev_img_url;
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_cp_list_success') ,
									"data"=>$data,
															
							));
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
	
	
	function _validateEventDetailrequest($data){
		$error_list = array();
		if($data['id']==""){
			$error_list['id'] = "event id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid event id ID!";
		}
		return $error_list;
	}
	
	function checkExpireEvent(){
		$this->Event_model->checkExpiredEvent();
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