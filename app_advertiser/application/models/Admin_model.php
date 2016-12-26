<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
	
	public function CheckUser($email, $password,$status){		
		//echo hash('sha256',$this->db->escape_str($password)); exit;
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('cu_email', $this->db->escape_str($email));
		$this->db->where('cu_password',  hash('sha256',$this->db->escape_str($password)));
		//$this->db->where('cu_status', $status);
		
		$query = $this->db->get();
		if ($query->num_rows())
		{
			$results = $query->row_array();
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('cu_email',$results['cu_email']);
			$this->session->set_userdata('cu_id',$results['cu_id']);
			unset($results['cu_password']);
			return true;
		}
	}
}