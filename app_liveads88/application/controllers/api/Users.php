<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is user system 
 * @author  EI
 *
 */
class Users extends REST_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->lang->load('api', 'english');
    }
	
	/*
	* Api user register
	*URL: api/users/register/format/json
	*{"user_name":"","user_email":"","user_phone":"","user_gender":"","user_password":"","user_country":"","user_first_name":"","user_last_name":"","user_invitation_code":"","country_code":""}
	*/	
	function register_post(){
	
		$code_exist = true;
		
		$verification_code = rand(1000, 9999);
		
		while($code_exist) {
			$verification_code = rand(1000, 9999);
			$sql = "select * from user where user_verification_code = $verification_code and user_active != 1";
			$co = $this->db->query($sql);
			if ($co->num_rows() == 0) {
				$code_exist = false;
			}
		}
		
		log_message('error', 'register, code:'.$verification_code);
		if($this->post()){
			$data = array(
					'user_email' 	=> $this->security->xss_clean($this->post('user_email')),
					'user_name' 	=> $this->security->xss_clean($this->post('user_name')),
					'user_password' 		=> $this->security->xss_clean($this->post('user_password')),
// 					'user_first_name' 		=> $this->security->xss_clean($this->post('user_first_name')),
// 					'user_last_name' 		=> $this->security->xss_clean($this->post('user_last_name')),
					'user_gender' 		=> $this->security->xss_clean($this->post('user_gender')),
					'user_country' 		=> $this->security->xss_clean($this->post('user_country')),
					'user_phone' 		=> $this->security->xss_clean($this->post('user_phone')),
					'user_verification_code' => $verification_code,
					);
			$error_result = $this->_validate_register_request($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				$data['user_password'] 	= hash('sha256',$data['user_password']);
				if($this->User_model->apiCheckMobileExist($this->security->xss_clean($this->post('user_phone')))){
					$response = array("status"=>array("code"=>406,"message"=> $this->lang->line('api_reg_phone_exists') ));
					$this->response($response, 200);
				}
				if($this->User_model->apiCheckEmailExist($this->security->xss_clean($this->post('user_email')))){
					$response = array("status"=>array("code"=>407,"message"=> $this->lang->line('api_reg_email_exists') ));
					$this->response($response, 200);
				}
				/*
				if($this->post('user_invitation_code') !=""){
					if(!$this->User_model->apiCheckInvitation($data['user_email'],$this->security->xss_clean($this->post('user_invitation_code')))){
						$response = array("status"=>array("code"=>408,"message"=> "Invalid invitation code!"));
						$this->response($response, 200);
					}					
				}
				*/
				
				//if($id = $this->User_model->apiRegister($data,$this->security->xss_clean($this->post('user_invitation_code')))){
				if($id = $this->User_model->apiRegister($data)){
					log_message('error', 'register_succes:'.$id);
					//the user_country is the country code
					$sms_result = $this->sendSMSVerificationCode($data['user_country'], $data['user_phone'], 'Verification code for MY LIFE. The verification code is :' . $verification_code);
					
					$response = array("status"=>array("code"=>200, "user_id"=>$id,"message"=> $this->lang->line('api_reg_success') ));
					$this->response($response, 200);		
				}else{
					log_message('error', 'register fail');
					$response = array("status"=>array("code"=>203,"message"=> $this->lang->line('api_reg_fail') ));
					$this->response($response, 200); 
				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	///////////// temporary edit by cayden -- please update accordingly ////////
	function edit_post(){
		
		if($this->post()){
			$data = array(
					
					'user_name' 	=> $this->security->xss_clean($this->post('user_name')),
					'user_password' 		=> $this->security->xss_clean($this->post('user_password')),
					'user_gender' 		=> $this->security->xss_clean($this->post('user_gender')),
					'user_email' 		=> $this->security->xss_clean($this->post('user_email')),
					'user_country' 		=> $this->security->xss_clean($this->post('user_country'))
				
					);
			$error_result = $this->_validate_edit_request($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if ($data['user_password'] != '')
					$data['user_password'] 	= hash('sha256',$data['user_password']);
				else
					unset($data['user_password']);
				$data['user_modified_date'] = date('Y-m-d H:i:s');
				
				if ($data['user_email'] == '') {
					unset($data['user_email']);
				}
				// if ($data['user_phone'] == '') {
// 					unset($data['user_phone']);
// 				}
				if ($data['user_name'] == '') {
					unset($data['user_name']);
				}
				
				if ($data['user_gender'] == '') {
					unset($data['user_gender']);
				}
				
				if ($data['user_country'] == '') {
					unset($data['user_country']);
				}
				
				//update
				$this->db->where('user_id', $this->post('user_id'));
				$this->db->update('user', $data);
				
				$response = array("status"=>array("code"=>200,"message"=> 'Update success' ));
				$this->response($response, 200);		
				
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	function _validate_edit_request($data){
		return array();
	}
	
	function pushtoken_post(){
		
		log_message('error', $this->post('token').'-'.$this->post('user_id').'-'.$this->post('platform'));
		//platform 1 = ios, 2 = andeoid
		if($this->post()){
			$data = array(
					
					'user_id' 	=> $this->security->xss_clean($this->post('user_id')),
					'token' 		=> $this->security->xss_clean($this->post('token')),
					'platform' => $this->security->xss_clean($this->post('platform'))
					);
			
				//validate the parameter here - undone
				
				$error_result = $this->_validate_pushtoken_request($data);
				if(count($error_result) > 0){
					$response = array("status"=>array("code"=>400,"message"=>$error_result));
					$this->response($response, 200);
				}else{
					//also check for duplicate token, the token should be unique - undone
					
					$this->db->insert('push_token', array('modified_date'=>date('Y-m-d H:i:s'),'user_id'=>$this->post('user_id'), 'token'=>$this->post('token'), 'platform'=>$this->post('platform')));
					
					$response = array("status"=>array("code"=>200,"message"=> ' success' ));
					$this->response($response, 200);
				}
				
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	///////////// temporary edit by cayden -- please update accordingly ////////
	
	function _validate_pushtoken_request($data){
		$error_list = array();
		
		if($data['user_id']=="" || !(is_numeric($data['user_id']))){
			$error_list['user_id'] = 'invalid user id';
		}
		
		if($data['token']==""){
			$error_list['token'] = 'token required';
		}else if( !($this->User_model->checkTokenNotExists($data['token'], $data['platform'])) ){
			$error_list['token'] = 'token already exists';
		}
		
		if($data['platform']=="" || !(is_numeric($data['platform']))){
			$error_list['platform'] = 'invalid platform';
		}
		
		return $error_list;
	}
	
	
	
	function _validate_register_request($data){
		$error_list = array();
		if($data['user_name']==""){
			$error_list['user_name'] = $this->lang->line('api_reg_name_required');
		}
		
		if($data['user_email']==""){
			$error_list['user_email'] = "Email required";
		}else if ((strlen($data['user_email']) > 96) || !filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
				$error_list['user_email']= $this->lang->line('api_reg_invalid_email');
		}
		
		if($data['user_phone']==""){
			$error_list['user_phone'] = $this->lang->line('api_reg_phone_required');
		}
		
		if($data['user_password']==""){
				$error_list['user_password'] = "Password required";
		}
		
		if($data['user_country']==""){
			$error_list['user_country'] = $this->lang->line('api_reg_country_required');
		}
		return $error_list;
	}
	
	function sendSMSVerificationCode($country_code, $mobile, $msg) {
		
// 		$mobile = '85112815';

		if($country_code == '65'){
			$mobile = '65' . $mobile ;
		}else if($country_code == '60'){
			if(substr($mobile , 0, 1) == '0'){
				$mobile = '6' . $mobile ;
			}else{
				$mobile = '60' . $mobile ;
			}
		}else{
			return false;
		}
		
		define('SMS_ID', '59291');
		define('SMS_PASS', 'TrZf0XYO');
		define('SMS_HEADER', 'MYLive');
		define('SMS_URL', 'https://mx.fortdigital.net/http/send-message?');
	
		// / Variables together with the values to be transferred. /
		$id=SMS_ID; // customer id for gaining access to HTTP2SMS /
		$pw=SMS_PASS; // customer PIN /
		$dnr='+'.$mobile; // number of destination /
		$snr=SMS_HEADER; // originating number (in this case empty) /

		// production of the required URL /
		$url = SMS_URL
		. 'username='.$id
		. '&password=' . UrlEncode($pw)
		. '&to=' . UrlEncode($dnr)
		. '&from='. UrlEncode($snr)
		. '&message=' . UrlEncode($msg);

		$sms_response = "";
		$sms_status = false;
		/* invocation of URL*/
		if (($f = @fopen($url, 'r')))
		{
			$answer = fgets($f, 255);
			if (substr($answer, 0, 1) == '+')
			{
				log_message('success', 'SMS to '.$dnr.' transport successful.');
				$sms_response = 'SMS to '.$dnr.' transport successful.'.$answer;
				$sms_status = true;
			} 
			else {
			 log_message('error', 'an error has occured: '.$answer);
			 $sms_response = 'an error has occured: '.$answer;
			}
		} 
		else {
			log_message('error', 'Error: URLcould not be opened.');	
			$sms_response = 'Error: URLcould not be opened.';			
		}
		
		$this->User_model->addSMSFeedback($country_code, $mobile, $sms_response, $msg);
		if($sms_status === true){
			return true;
		}
		return false;
	}
	
	/*
	* Api user verification
	* URL: api/users/verification/format/json
	*{"user_id":"","user_verification_code":""}
	*/
	function verification_post(){
		log_message('error', 'verification: user_id:'.$this->post('user_id').',code:'.$this->post('user_verification_code'));
		if($this->post()){
			$user_id = $this->security->xss_clean($this->post('user_id'));
			$code = $this->security->xss_clean($this->post('user_verification_code'));
			if($this->User_model->apiCheckVerifi($user_id,$code)){
			 $response = array("status"=>array("code"=>200, "message"=> $this->lang->line('api_veri_success') ));
				$this->response($response, 200);		
			}else{
				$response = array("status"=>array("code"=>203,"message"=> $this->lang->line('api_veri_fail') ));
				$this->response($response, 200); 
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	/*
	* Api user login
	* URL: api/users/login/format/json
	*{"user":"","user_password":""}
	*/
	function login_post(){
		
		if($this->post()){
			log_message('error', 'loginss:'.$this->post('user').','.$this->post('user_password'));
			$user 			= $this->security->xss_clean($this->post('user'));			
			$user_password 	=  hash('sha256',$this->security->xss_clean($this->post('user_password')));
			$error_result = $this->_validate_login_request($this->post('user'),$this->post('user_password'));
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($user = $this->User_model->apiLogin($user,$user_password )){
					$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_login_success') ,
									"user_id"=>$user['user_id'],			
									"user_name"=>$user['user_name'],
									"user_email"=>$user['user_email'],
									"user_phone"=>$user['user_phone'],
									"user_first_name"=>$user['user_first_name'],
									"user_last_name"=>$user['user_last_name'],
									"user_country"=>$user['user_country'],
									"user_gender"=>$user['user_gender'],							
									"user_active"=>$user['user_active'],							
									"user_newletter_status"=>1,							
									"user_token"=>$user['token'],							
									"user_referrer_code"=>$user['user_referrer_code'],							
							));
					$this->response($response, 200); // 200 being the HTTP response code	
				}else{
					log_message('error', 'login failed');
					$response = array("status"=>array("code"=>203,"message"=> $this->lang->line('api_login_fail') ));
					$this->response($response, 200); 
				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	/*
	* Api user login
	* URL: api/users/fblogin/format/json
	*{"user":""}
	*/
	function fblogin_post(){
		if($this->post()){
			$user 			= $this->security->xss_clean($this->post('user'));			
			$error_result = $this->_validate_fblogin_request($this->post('user'));
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($user = $this->User_model->apiFbLogin($user)){
					if($user == "not_exist"){
						$response = array("status"=>array("code"=>401,"message"=>"email not exist in db"));
						$this->response($response, 200);
					}else{
						$response = array("status"=>array(
									"code"			=>200,
									"message"		=> $this->lang->line('api_login_success') ,
									"user_id"=>$user['user_id'],			
									"user_name"=>$user['user_name'],
									"user_email"=>$user['user_email'],
									"user_phone"=>$user['user_phone'],
									"user_first_name"=>$user['user_first_name'],
									"user_last_name"=>$user['user_last_name'],
									"user_country"=>$user['user_country'],
									"user_gender"=>$user['user_gender'],							
									"user_active"=>$user['user_active'],							
									"user_newletter_status"=>$user['user_newletter_status'],							
									"user_token"=>$user['token'],							
									"user_referrer_code"=>$user['user_referrer_code'],							
							));
						$this->response($response, 200); // 200 being the HTTP response code
					}
						
				}else{
					$response = array("status"=>array("code"=>203,"message"=> $this->lang->line('api_login_fail') ));
					$this->response($response, 200); 
				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	function _validate_login_request($user,$user_password){
		$error_list = array();
		if($user ==""){
			$error_list['user'] = $this->lang->line('api_veri_user_required');
		}
		
		if($user_password==""){
			$error_list['user_password'] = $this->lang->line('api_veri_pass_required');
		}
		return $error_list;
	}
	
	
	function _validate_fblogin_request($user){
		$error_list = array();
		if($user ==""){
			$error_list['user'] = $this->lang->line('api_veri_user_required');
		}

		return $error_list;
	}
	
	
	/*
	* Api user password
	* URL: api/users/password/format/json
	*{"user_token":"","user_old_password":"","user_new_password":""}
	*/
	function password_post(){
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'old_password'	=> trim($this->security->xss_clean($this->post('user_old_password'))),
				'password' 		=> trim($this->security->xss_clean($this->post('user_new_password'))),
			);
			$error_result = $this->_validateChangePasswordrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
				if($user_id = $this->User_model->check_token($data)){
					$data['old_password'] 	= hash('sha256',$data['old_password']);
					$data['password'] 		= hash('sha256',$data['password']);
					if($this->User_model->check_oldPassword($data, $user_id)){
						if($updated_token = $this->User_model->api_updatePassword($data, $user_id)){
							$response =array("status"=> array("code"=>200,"message"=> $this->lang->line('api_chp_success') , "token"=>$updated_token ));
							$this->response($response, 200);
						}else{
							$response =array("status"=> array("code"=>203,"message"=> $this->lang->line('api_chp_fail') ));
							$this->response($response, 200);	
						}
					}else{
						$response =array("status"=> array("code"=>406,"message"=> $this->lang->line('api_chp_icorrect_old_password') ));
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
	
	function resetpassword_post(){
		if($this->post()){
			$data = array(
				'email' 		=> trim($this->security->xss_clean($this->post('user_email')))
			);
			
			if($data['email']==""){
				$response =array("status"=> array("code"=>400,"message"=> "Email Required."));
				$this->response($response, 200);
				exit;
			}else if ((strlen($data['email']) > 96) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
				$response =array("status"=> array("code"=>400,"message"=> "Invalid Email Address."));
				$this->response($response, 200);
				exit;	
			}
			
			
			if($this->User_model->checkEmailExistsForPasswordReset($data['email'])){
				
				$newPassword = substr(sha1(rand()), 0, 10);
				
				$this->User_model->api_resetPassword( $data['email'], hash('sha256',$newPassword) );
				//send email to investor
				$subject = 'User Password Reset';		
				$name 	 = "Live Ads 88";
				$message = 'Your password was reset using the email address '.$data['email'].' on ' . date('l jS \of F Y h:i:s A') . '.';				
				$message.= '<br /><br />Your new password is '.$newPassword;				
				$message.= '<br /><br />If you didn\'t do this, please secure your account.';				
				$message.= '<br /><br />Thanks<br />Live Ads 88 Team';				
				$to = $data['email'];
				$from = 'support@liveads88.com';
				$config = $this->config->load('email_config');
	
				$this->load->library('email', $config); 
				$this->email->set_mailtype("html");
				$this->email->from($from, $name);
	
				$this->email->reply_to($from, $name);
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();
				
				$response =array("status"=> array("code"=>200,"message"=> "A new password has been sent to your email"));
				$this->response($response, 200);
				
			}else{
				$response =array("status"=> array("code"=>203,"message"=> "The requested email not found in the system."));
				$this->response($response, 200);
			}
	
		}
		else{
		$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	
	/*
	* Api user inquiry
	* URL: api/users/inquiry/format/json
	*{"user_token":"","user_id":"","user_name":"","user_message":"","image":""}
	*/
	function inquiry_post(){
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'user_name' 		=> trim($this->security->xss_clean($this->post('user_name'))),
				'user_message' 		=> trim($this->security->xss_clean($this->post('user_message'))),
				'image' 		=> trim($this->security->xss_clean($this->post('image'))),
				'user_subject' 		=> trim($this->security->xss_clean($this->post('user_subject'))),
				);	
				
			$error_result = $this->_validateInquiryrequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
// 				if($user_id = $this->User_model->check_token($data)){
					if($this->User_model->apiAddInquiry($data)){
						$response = array("status"=>array(
										"code"			=>200,
										"message"		=> "successfully send" ,
																					
								));
						$this->response($response, 200); // 200 being the HTTP response code	
					}else{
						$response =array("status"=> array("code"=>203,"message"=> "Error send"));
						$this->response($response, 200);
					}
				// }else{
// 					$response =array("status"=> array("code"=>401,"message"=> $this->lang->line('api_invalid_token') ));
// 					$this->response($response, 200);
// 				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 	
		}
	}
	
	/*
	* Api usercount
	* URL: api/users/usercount/format/json
	*
	*/
	function usercount_post(){
		if($total = $this->User_model->apiGetTotalUser($data)){
			$response = array("status"=>array(
							"code"			=>200,
							"total_user"    => $total,
							"message"		=> "successfully send" ,
																		
					));
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> "Error send"));
			$this->response($response, 200);
		}
	}
	
	/*
	* Api flashnews
	* URL: api/users/flashnews/format/json
	*
	*/
	function flashnews_post(){
		if($news = $this->User_model->apiGetFlashNews()){
			$response = array("status"=>array(
							"code"			=>200,
							"data"    => $news,
							"message"		=> "success" ,
																		
					));
			$this->response($response, 200); // 200 being the HTTP response code	
		}else{
			$response =array("status"=> array("code"=>203,"message"=> "Results not found"));
			$this->response($response, 200);
		}
	}
	
	
	/*
	* Api splash
	* URL: api/users/splash/format/json
	*
	*/
	function splash_post(){
		if($splash = $this->User_model->apiGetSplash()){
			
			$targetPath = getcwd() . '/uploads/splash/';
			if(file_exists($targetPath.$splash->spimg_image_name)){
				$bin_string = file_get_contents($targetPath.$splash->spimg_image_name);
				$hex_string = base64_encode($bin_string);
				
				$response = array("status"=>array(
								"code"			=>200,
								"link_to"    => $splash->spimg_linkto,
								"link"    => $splash->spimg_website,
								"email"    => $splash->spimg_email,
								"customer_id"    => $splash->spimg_customer_id,
								"image_url"    => urlencode('/uploads/splash/'.$splash->spimg_image_name),							
								"image"    => $hex_string,							
								"message"		=> "Results found" ,
																			
						));
				$this->response($response, 200); // 200 being the HTTP response code	
			}
		}else{
			$response =array("status"=> array("code"=>203,"message"=> "Results not found"));
			$this->response($response, 200);
		}
	}
	
	/*
	* Api like 
	* URL: api/users/like/format/json
	*{"user_token":"","user_id":"","id":"","type":""}
	*/
	function like_post(){
		log_message('error', 'like:'.$this->post('user_id'));
		if($this->post()){
			$data = array(
				'token' 		=> trim($this->security->xss_clean($this->post('user_token'))),
				'user_id' 		=> trim($this->security->xss_clean($this->post('user_id'))),
				'id'	=> trim($this->security->xss_clean($this->post('id'))),
				'type' 		=> trim($this->security->xss_clean($this->post('type'))),
			);
			$error_result = $this->_validateLikerequest($data);
			if(count($error_result) > 0){
				$response = array("status"=>array("code"=>400,"message"=>$error_result));
				$this->response($response, 200);
			}else{
// 				if($this->post('user_id') == $this->User_model->check_token($data)){
					if($this->User_model->apiLike($data)){
						$response =array("status"=> array("code"=>200,"message"=> "success"));
						$this->response($response, 200);
					}else{
						$response =array("status"=> array("code"=>203,"message"=> "fail" ));
						$this->response($response, 200);	
					}
				// }else{
// 					$response =array("status"=> array("code"=>401,"message"=> $this->lang->line('api_invalid_token') ));
// 					$this->response($response, 200);
// 				}
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	function _validateChangePasswordrequest($data){
		$error_list = array();
		
		if($data['token']==""){
			$error_list['token'] = "token required!";
		}else if(!$this->_validateCharacterAndNumber($data['token'])){
			$error_list['token'] = "Invalid token ID!";
		}
		
		if($data['old_password']==""){
			$error_list['old_password'] = $this->lang->line('api_chp_password_required');
		}
		
		if($data['password']==""){
			$error_list['password'] = $this->lang->line('api_chp_password_required');
		}
		
		return $error_list;
	}
	
	function _validateInquiryrequest($data){
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

		if($data['user_name']==""){
			$error_list['user_name'] = "Name required!";
		}
		
		if($data['user_message']==""){
			$error_list['user_message'] = "Message required!";
		}
		if($data['user_subject']==""){
			$error_list['user_subject'] = "Subject required!";
		}
		return $error_list;
	}
	
	function _validateLikerequest($data){
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
			$error_list['id'] = "item id required!";
		}else if(!$this->_validatePositiveNumber($data['id'])){
			$error_list['id'] = "Invalid item id ID!";
		}
		
		if($data['type']==""){
			$error_list['type'] = "Type required!";
		}
		
		return $error_list;
	}
	
	function _validateBookmarkrequest($data){
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
		
		if($data['bookmark_id']==""){
			$error_list['bookmark_id'] = "bookmark id required!";
		}else if(!$this->_validatePositiveNumber($data['bookmark_id'])){
			$error_list['bookmark_id'] = "Invalid bookmark id ID!";
		}
		
		if($data['type']==""){
			$error_list['type'] = "Type required!";
		}
		
		return $error_list;
	}
	
	function _validateBookmarkListrequest($data){
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
	
	
	
	
	/*
	* Api user referrer code post
	* URL: api/users/referrer/format/json
	*{"user_id":"","user_verification_code":""}
	*/
	function referrer_post(){
		if($this->post()){
			$user_id = $this->security->xss_clean($this->post('user_id'));
			$code = strtoupper($this->security->xss_clean($this->post('referrer_code')));
			if($this->User_model->apiCheckReferrerCode($user_id,$code)){
			 $response = array("status"=>array("code"=>200, "message"=> $this->lang->line('api_referrer_success') ));
				$this->response($response, 200);		
			}else{
				$response = array("status"=>array("code"=>203,"message"=> $this->lang->line('api_referrer_fail') ));
				$this->response($response, 200); 
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	function newsletter_post(){
		if($this->post()){
			$user_id = $this->security->xss_clean($this->post('user_id'));
			$status = strtoupper($this->security->xss_clean($this->post('status')));
			
			if($user_id!="" && is_numeric($user_id) && $user_id >0 && $status!="" && is_numeric($status) && $status >=0 && $status <=1 ){
				if($this->User_model->apiChangeNewsLetterStatus($user_id,$status)){
				 $response = array("status"=>array("code"=>200, "message"=> 'success' ));
					$this->response($response, 200);		
				}else{
					$response = array("status"=>array("code"=>203,"message"=> 'fail' ));
					$this->response($response, 200); 
				}
			}else{
				$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
				$this->response($response, 200); 
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
	
	
	function userdata_post(){
		if($this->post()){
			$user_id 	= $this->security->xss_clean($this->post('user_id'));
			$token 		= $this->security->xss_clean($this->post('token'));
			
			if($user_id!="" && is_numeric($user_id) && $user_id >0 && $token!="" ){
				if($data = $this->User_model->apiGetUserData($user_id,$token)){
					
					$response = array("status"=>array(
									"code"					=>200,
									"message"				=> 'success',
									"user_id"				=>$data->user_id,			
									"user_name"				=>$data->user_name,
									"user_email"			=>$data->user_email,
									"user_phone"			=>$data->user_phone,
									"user_first_name"		=>$data->user_first_name,
									"user_last_name"		=>$data->user_last_name,
									"user_country"			=>$data->user_country,
									"user_gender"			=>$data->user_gender, 						
									"user_newletter_status"	=>$data->user_newletter_status, 
									"user_referrer_code"	=>$data->user_referrer_code,							
							));
				
					$this->response($response, 200);		
				}else{
					$response = array("status"=>array("code"=>203,"message"=> 'fail' ));
					$this->response($response, 200); 
				}
			}else{
				$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
				$this->response($response, 200); 
			}
		}else{
			$response =array("status"=> array("code"=>403,"message"=> $this->lang->line('api_invalid_access') ));
			$this->response($response, 200); 
		}
	}
}