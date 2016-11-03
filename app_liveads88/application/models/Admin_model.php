<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
	
	public function CheckUser($email, $password,$status){		
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_email', $this->db->escape_str($email));
		$this->db->where('admin_password',  hash('sha256',$this->db->escape_str($password)));
		$this->db->where('admin_active', $status);
		
		$query = $this->db->get();
		if ($query->num_rows())
		{
			$results = $query->row_array();
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('admin_email',$results['admin_email']);
			$this->session->set_userdata('admin_id',$results['admin_id']);
			$this->session->set_userdata('user_level','admin');
			unset($results['admin_password']);
			return true;
		}
	}
}