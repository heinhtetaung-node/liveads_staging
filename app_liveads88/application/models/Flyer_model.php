<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flyer_Model extends CI_Model
{
	
	function getFlyerDataById($id){
		$sql = "SELECT
				customer.cu_name,
				shop_flyer.spf_name,
				shop_flyer.cu_id
				FROM
				shop_flyer
				INNER JOIN customer ON shop_flyer.cu_id = customer.cu_id WHERE
								shop_flyer.spf_id  =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function getFlyerImagesByCustomerID($id){
		$sql = "SELECT
				customer.cu_name,
				shop_flyer.spf_id,
				shop_flyer.spf_name,
				shop_flyer.cu_id
				FROM
				shop_flyer
				INNER JOIN customer ON shop_flyer.cu_id = customer.cu_id WHERE
								shop_flyer.cu_id  =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		return false;
	}
	
	function insertFlyerImageBatchArray($data){
		$this->db->insert_batch('shop_flyer', $data); 
	}
	
	function check_customer_flyer_exists($id){
		$sql = "SELECT * FROM shop_flyer WHERE cu_id  =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return true;
		}
		return false;
		
	}
	
	
	function getFlyerImageNameByIDs($cu_id, $spf_id){
		$sql = "SELECT
				spf_name
				FROM
				shop_flyer
				WHERE spf_id  =".$spf_id ."  
				AND cu_id=". $cu_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$image =  $query->row();
			return $image->spf_name;
		}
		return false;
	}
	
	function deleteFlyerImageNameByIDs($cu_id, $spf_id){
		$this->db->where('cu_id', $cu_id);
		$this->db->where('spf_id', $spf_id);
		$this->db->delete('shop_flyer'); 
	}
	
}