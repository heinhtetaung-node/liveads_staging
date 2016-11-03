<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is user system 
 * @author  EI
 *
 */
class Feedback extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->lang->load('api', 'english');
    }
	
	
	/*
	* Api user inquiry
	* URL: api/feedback/inquiry/format/json
	*{"user_token":"","user_id":"","user_name":"","user_message":"","image":""}
	*/
	function inquiry_post(){
		if($this->post()){
		
			$feedbacks = serialize($this->post());
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'f_content' => $feedbacks
				);	
				
			$error_result = array();
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($user_id = $this->User_model->check_token($data)){
					
					$data['f_created_date'] = date('Y-m-d H:i:s');
					unset($data['token']);
					$this->db->insert('feedbacks', $data);
					// if($this->User_model->apiAddInquiry($data)){
						$response = array("status"=>array(
										"code"			=>200,
										"message"		=> "successfully send" ,
																					
								));
						$this->response($response, 200); // 200 being the HTTP response code	
					// }else{
// 						$response =array("status"=> array("code"=>203,"message"=> "Error send"));
// 						$this->response($response, 200);
// 					}
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
	
}