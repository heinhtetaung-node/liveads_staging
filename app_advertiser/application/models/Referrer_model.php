<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referrer_Model extends CI_Model
{
	
	function getReferrerById($id){
		$sql = "SELECT `user_referrer`.*, 
						u1.user_name as referral_user_name , 
						u1.user_email as referral_user_email , 
						u2.user_name as referrer_user_name, 
						u2.user_email as referrer_user_email 
				FROM `user_referrer`
				JOIN user as u1 on `user_referrer`.referral = u1.user_id 
				JOIN user as u2 on `user_referrer`.referrer = u2.user_id
				WHERE `user_referrer`.refer_id =". $id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function updateReferrer($id,$data){
		$this->db->where('refer_id',$id);
		$this->db->update('user_referrer',$data);
		return true;
	}
	
}