<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model
{
	
	//function apiRegister($data,$invitation_code){
	function apiRegister($data){
		$this->db->set('user_created_date', 'NOW()', FALSE);
		$this->db->set('user_modified_date', 'NOW()', FALSE);
		$this->db->set('user_referrer_code', $this->generateRandomString());
		$this->db->insert('user', $data);
		$user_id = $this->db->insert_id() ;
		/*
		$this->addInvitationCode($user_id);
		if($invitation_code != ""){
			$this->db->where('invitation_user_id IS NULL');
			$this->db->where('invite_email',  $this->db->escape_str($data['user_email']));
			$this->db->where('invite_code',  $this->db->escape_str($invitation_code));
			$this->db->set('invitation_user_id', $user_id);
			$this->db->update('invite');
		}
		*/
		return $user_id;
	}
	
	function generateRandomString() {
		$length = 6;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
	
	function apiCheckReferrerCode($user_id,$code){
		
		log_message('error', $user_id.' '.$code);
		$signup_date = "";
		$this->db->select('user_created_date');		
		$this->db->where('user_id',  $this->db->escape_str($user_id));
		$this->db->from('user');
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			$row = $query->row();
			$signup_date = $row->user_created_date;
		}else{
			return false;
		}
		
		
		$this->db->select('*');		
		$this->db->where('referral',  $this->db->escape_str($user_id));
		$this->db->from('user_referrer');
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			return false;
		}
		
		$this->db->select('user_id');		
		$this->db->where('user_referrer_code',  $this->db->escape_str($code));
		$this->db->from('user');
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			//insert
			$row = $query->row();
			$referrer = $row->user_id;
			
			$data = array(
					'referral' 			=> $user_id,
					'referrer' 			=> $referrer,
					'signup_date' 		=> $signup_date,
					'gift_sent_status' 	=> '0',
					'gift_sent_date'	=> '',
					'remark'			=> '',
					'refer_created'			=> date('Y-m-d H:i:s')
					);
			$this->db->insert('user_referrer', $data);
			$refer_id = $this->db->insert_id() ;
			if($refer_id > 0){
				return true;
			}else{
				return false;
			}
		}
		return false;
	}
	
	function apiCheckInvitation($email,$invitation_code){
		$this->db->select('*');		
		$this->db->where('invite_code',  $this->db->escape_str($invitation_code));
		$this->db->where('invite_email',  $this->db->escape_str($email));
		$this->db->from('invite');
		$query = $this->db->get();
		if(count($query->result_array())>0){
			return true;
		}
	}
	
	function addInvitationCode($user_id){
		$data = array(
					'invite_user_id' => $this->db->escape($user_id),
					'invite_code' 	=> rand(1000, 9999),
					);
		$this->db->insert('invite', $data);
		return true;
	}
	
	function apiCheckEmailExist($email){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',  $this->db->escape_str($email));
		$query = $this->db->get();
		if(count($query->result_array())>0){
			return true;
		}
	}
	function apiCheckMobileExist($mobile){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_phone',  $this->db->escape_str($mobile));
		$query = $this->db->get();
		if(count($query->result_array())>0){
			return true;
		}
	}
	
	function apiCheckVerifi($id,$code){
		$verify_code =  rand(1000, 9999);
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_verification_code', $this->db->escape_str($code));
		$this->db->where('user_id', $this->db->escape_str($id));
		$this->db->where("user_active !=",1);
		$query = $this->db->get();
		if(count($query->result_array())>0){
			$this->db->where('user_verification_code', $this->db->escape_str($code));
			$this->db->where('user_id',  $this->db->escape_str($id));
			$this->db->set('user_active', 1);
// 			$this->db->set('user_verification_code', $verify_code);
			$this->db->update('user');
			return true;
		}
		else
			return false;
	}
	
	function apiLogin($user,$password){
		if(filter_var($user, FILTER_VALIDATE_EMAIL)) { 
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user_active',1);
			$this->db->where('user_email', $this->db->escape_str($user));
			$this->db->where('user_password', $this->db->escape_str($password));
			$query = $this->db->get();
			if($query->num_rows() >0 ){
			log_message('error', 'login');
				$row = $query->row();
				$token 	   = hash('sha256',"BPLIFE" . $row->user_id . time(). 'login');
				$token_created = date('Y-m-d H:i:s');
		
				
				$token_data = array(
					'token' 	=>$token,
					'token_created' 	=>$token_created,
				);
				
				if($row->user_active == 1){
					if($this->checkTokenExist($row->user_id)){
						$this->db->where('user_id', $row->user_id);
						$this->db->update('token',$token_data);
					}else{
						$this->db->set('token',$token);
						$this->db->set('token_created',$token_created);
						$this->db->set('user_id', $row->user_id);
						$this->db->insert('token');
					}
					
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}else{
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}
			}
		}else if($this->_validatePositiveNumber($user)){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user_phone', $this->db->escape_str($user));
			$this->db->where('user_password', $this->db->escape_str($password));
			$query = $this->db->get();
			if($query->num_rows() >0 ){
				$row = $query->row();
				$token 	   = hash('sha256',"BPLIFE" . $row->user_id . time(). 'login');
				$token_created = date('Y-m-d H:i:s');
		
				
				$token_data = array(
					'token' 	=>$token,
					'token_created' 	=>$token_created,
				);
				
				if($row->user_active == 1){
					if($this->checkTokenExist($row->user_id)){
						$this->db->where('user_id', $row->user_id);
						$this->db->update('token',$token_data);
					}else{
						$this->db->set('token',$token);
						$this->db->set('token_created',$token_created);
						$this->db->set('user_id', $row->user_id);
						$this->db->insert('token');
					}
					
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}else{
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}
			}
		}		
		
		
	}
	
	function apiFbLogin($user){
		if(filter_var($user, FILTER_VALIDATE_EMAIL)) { 
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user_email', $this->db->escape_str($user));
			$query = $this->db->get();
			if($query->num_rows() >0 ){
				$row = $query->row();
				$token 	   = hash('sha256',"BPLIFE" . $row->user_id . time(). 'login');
				$token_created = date('Y-m-d H:i:s');
		
				
				$token_data = array(
					'token' 	=>$token,
					'token_created' 	=>$token_created,
				);
				
				if($row->user_active == 1){
					if($this->checkTokenExist($row->user_id)){
						$this->db->where('user_id', $row->user_id);
						$this->db->update('token',$token_data);
					}else{
						$this->db->set('token',$token);
						$this->db->set('token_created',$token_created);
						$this->db->set('user_id', $row->user_id);
						$this->db->insert('token');
					}
					
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}else{
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}
			}else{
				return "not_exist";
			}
		}else if($this->_validatePositiveNumber($user)){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user_phone', $this->db->escape_str($user));
			$query = $this->db->get();
			if($query->num_rows() >0 ){
				$row = $query->row();
				$token 	   = hash('sha256',"BPLIFE" . $row->user_id . time(). 'login');
				$token_created = date('Y-m-d H:i:s');
		
				
				$token_data = array(
					'token' 	=>$token,
					'token_created' 	=>$token_created,
				);
				
				if($row->user_active == 1){
					if($this->checkTokenExist($row->user_id)){
						$this->db->where('user_id', $row->user_id);
						$this->db->update('token',$token_data);
					}else{
						$this->db->set('token',$token);
						$this->db->set('token_created',$token_created);
						$this->db->set('user_id', $row->user_id);
						$this->db->insert('token');
					}
					
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}else{
					$user_data = $this->apiUserData($row->user_id);
					return $user_data;
				}
			}else{
				return "not_exist";
			}
		}
		
	}
	
	
	function apiUserData($user_id){
		$sql = "SELECT
				user.user_id,
				user.user_email,
				user.user_name,
				user.user_first_name,
				user.user_last_name,
				user.user_gender,
				user.user_country,
				user.user_phone,
				user.user_password,
				user.user_verification_code,
				user.user_active,
				user.user_created_date,
				user.user_modified_date,
				user.user_newletter_status,
				user.user_referrer_code,
				token.token_id,
				token.token
				FROM
				user
				LEFT JOIN token ON user.user_id = token.user_id WHERE user.user_id=".$this->db->escape_str($user_id);
				//print_r($sql );
        $query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		}
	}
	
	function checkTokenExist($user_id){
		$this->db->select('*');
		$this->db->from('token');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		if($query->num_rows() >0 ){
			return true;
		}
	}

	function check_token($data){
		$sql = "SELECT `user_id` FROM `token` WHERE `token` = '".$this->db->escape_str($data['token'])."'";
		log_message('error', $sql);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row->user_id;
		}
		return false;	
	}
	
	function check_oldPassword($data, $user_id){
		$sql = "SELECT * FROM `user` as user
				JOIN `token` as t ON t.user_id = user.user_id AND
				t.`token` = '".$this->db->escape_str($data['token'])."' AND 
				user.`user_password` = '".$this->db->escape_str($data['old_password'])."' AND 
				user.`user_id` = '".$user_id."' AND 
				user.`user_active` = 1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return true;
		}
		return false;	
	}
	
	function api_updatePassword($data, $user_id){		
		
		//////////////////////
			$token 	   = hash('sha256',"MCH" . $user_id . time() . 'chpwd');
			$token_created = date('Y-m-d H:i:s');
			
			
			$token_data = array(
				'token' 	=>$token,
				'token_created' 	=>$token_created,

			);
			$this->db->where('user_id', $user_id);
			$this->db->update('token', $token_data);
		//////////////////////
		
		
		
		$this->db->set('user_password', $this->db->escape($data['password']), FALSE);
		$this->db->set('user_modified_date', 'NOW()', FALSE);
		$this->db->where('user_id',$user_id);
		$this->db->update("user");
		if($this->db->affected_rows() > 0){
			return $token;
		}else{
			return false;
		} 
		
	}
	/*
	function apiBookmark($data){
		$this->db->set('bm_created', 'NOW()', FALSE);
		$this->db->set('bm_user_id', $data['user_id']);
		$this->db->set('bm_bookmark_id', $data['bookmark_id']);
		$this->db->set('bm_type', $data['type']);
		$this->db->insert('bookmark');
		return true;
	}
	
	function apiGetBookmark($id){
		$sql = "SELECT
			bookmark.bm_bookmark_id,
			bookmark.bm_type,
			bookmark.bm_id,
			bookmark.bm_created
			FROM
			bookmark
			WHERE
			bookmark.bm_user_id =".$id;
			$query = $this->db->query($sql);
			if($query->num_rows() > 0)
			{
				$result = $query->result();
				
			}
	}
	*/
	
	function apiAddInquiry($data){
		$this->db->set('inq_created', 'NOW()', FALSE);
		$this->db->set('inq_message',  $this->db->escape_str($data['user_message']));
		$this->db->set('inq_subject',  $this->db->escape_str($data['user_subject']));
		$this->db->set('inq_name',  $this->db->escape_str($data['user_name']));
		$this->db->set('user_id',  $this->db->escape_str($data['user_id']));
		$this->db->set('inq_img_base64',  $this->db->escape_str($data['image']));
		$this->db->insert('inquiry');
		return true;
	}
	
	function apiGetTotalUser(){
		$query = $this->db->query('SELECT * FROM user WHERE user_active = 1');
		return $query->num_rows(); 
	}

	
	function _validatePositiveNumber($value){
		if (!preg_match('/^[0-9]+$/', $value)) {
			return false;
		} else {
			return true;
		}
	}
	
	
	function apiGetFlashNews(){
		$sql = "SELECT
				flash_news.fn_text
				FROM
				flash_news
				WHERE fn_expired >= DATE(NOW())";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $fn){
				$fnews[] = $fn->fn_text;
			}
			return $fnews;
		}
	}
	
	function apiGetSplash(){	
		$sql = "SELECT spimg_id,spimg_linkto,spimg_image_name,spimg_image_base64,spimg_website,spimg_email,spimg_customer_id FROM splash_image WHERE spimg_status=1 ORDER BY RAND() LIMIT 1 ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->row();
				//print_r($row);
			return $row;
		}
	}
	
	function apiLike($data){
		$this->db->set('like_created', 'NOW()', FALSE);
		$this->db->set('like_user_id', $data['user_id']);
		$this->db->set('like_item_id', $data['id']);
		$this->db->set('like_type', $data['type']);
		$this->db->insert('like');
		if($data['type'] == "event"){
			$this->db->where('ev_id',  $this->db->escape_str($data['id']));
			$this->db->set('ev_like_count', 'ev_like_count+ 1', FALSE);
			$this->db->update('event');
		}else if($data['type'] == "shop"){
			$this->db->where('cu_id',  $this->db->escape_str($data['id']));
			$this->db->set('cu_like_count', 'cu_like_count+ 1', FALSE);
			$this->db->update('customer');
		}else if($data['type'] == "coupon"){
			$this->db->where('cp_id',  $this->db->escape_str($data['id']));
			$this->db->set('cp_like_count', 'cp_like_count+ 1', FALSE);
			$this->db->update('coupon');
		}else if($data['type'] == "product"){
			$this->db->where('pro_id',  $this->db->escape_str($data['id']));
			$this->db->set('pro_like_count', 'pro_like_count+ 1', FALSE);
			$this->db->update('product');
		}else if($data['type'] == "job"){
			$this->db->where('jb_id',  $this->db->escape_str($data['id']));
			$this->db->set('jb_like_count', 'jb_like_count+ 1', FALSE);
			$this->db->update('job');
		}
		return true;
	}
	
	function getUserById($id){
		$sql = "SELECT
			`user`.user_email,
			`user`.user_name,
			`user`.user_first_name,
			`user`.user_last_name,
			`user`.user_gender,
			`user`.user_country,
			`user`.user_phone,
			`user`.user_active,
			`user`.user_created_date,
			`user`.user_id
			FROM
			`user`
			WHERE
			`user`.user_id =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		return false;
	}
	
	function checkTokenNotExists($token, $platform){
		$sql = "SELECT * FROM `push_token` WHERE `token` ='".$this->db->escape_str($token) ."' AND platform='".$this->db->escape_str($platform)."'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return false;
		}
		return true;
	}
	
	function checkEmailExistsForPasswordReset($email){
		$sql = "SELECT `user`.user_id FROM `user` WHERE `user`.user_email ='".$email."'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return true;
		}
		return false;
	}
	
	function api_resetPassword($email, $password){		
		
		$this->db->set('user_password', $password);
		$this->db->set('user_modified_date', 'NOW()', FALSE);
		$this->db->where('user_email',$email);
		$this->db->update("user");
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		} 
		
	}
	
	function apiChangeNewsLetterStatus($user_id,$status){
		$user_found = false;
		$sql = "SELECT user_email 
			FROM
			`user`
			WHERE
			user_id =".$user_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$user_found = true;
		}else{
			return false;
		}
		
		if($user_found){
			
			$this->db->where('user_id',  $this->db->escape_str($user_id));
			$this->db->set('user_newletter_status', $status);
			$this->db->update('user');
			return true;
		}
	}
	
	
	function addSMSFeedback($country_code, $mobile, $sms_response, $msg){
		$this->db->set('send_date', 'NOW()', FALSE);
		$this->db->set('country_code',  $this->db->escape_str($country_code));
		$this->db->set('mobile_number',  $this->db->escape_str($mobile));
		$this->db->set('response_from_sms_gateway',  $this->db->escape_str($sms_response));
		$this->db->set('message',  $this->db->escape_str($msg));
		$this->db->insert('sms_log');
		return true;
	}
	
	
	function apiGetUserData($user_id,$token){
		$sql = "SELECT
				user.user_id,
				user.user_email,
				user.user_name,
				user.user_first_name,
				user.user_last_name,
				user.user_gender,
				user.user_country,
				user.user_phone,
				user.user_password,
				user.user_verification_code,
				user.user_active,
				user.user_created_date,
				user.user_modified_date,
				user.user_newletter_status,
				user.user_referrer_code,
				token.token_id,
				token.token
				FROM
				user
				JOIN token ON user.user_id = token.user_id 
				WHERE 
				user.user_id=".$this->db->escape_str($user_id)." 
				AND token.token='".$this->db->escape_str($token)."'";
				
		$query = $this->db->query($sql);
		
		if($query->num_rows() >0 ){
			$row = $query->row();
				return $row;
		}
		return false;		
	}
	
	
	function edit_user($data, $id){
		$data_to_store = array(
			'user_email'=>$data['user_email'],
			'user_name'=>$data['user_name'],
			'user_first_name'=>$data['user_first_name'],
			'user_last_name'=>$data['user_last_name'],
			'user_gender'=>(isset($data['user_gender']) && $data['user_gender']!="" ? $data['user_gender'] : ''),
			'user_country'=>$data['user_country'],
			'user_phone'=>$data['user_phone'],
			'user_active'=>$data['user_active'],
			'user_modified_date'=>date('Y-m-d H:i:s')
		);
		
		if($data['password'] && $data['password']!=""){
			$data_to_store['user_password'] = hash('sha256',$data['password']);
		}
		
		$this->db->where('user_id', $id);
		$this->db->update('user', $data_to_store);
		return true;
	}
	
}