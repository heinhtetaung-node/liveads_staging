<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flashnews_Model extends CI_Model
{
	function addFlashnews($data){
		$this->db->set('fn_created', 'NOW()', FALSE);
		$this->db->set('fn_modified', 'NOW()', FALSE);
		$this->db->insert('flash_news', $data);
		return true;
	}
	
	function updateFlashnews($id,$data){
		$this->db->set('fn_modified', 'NOW()', FALSE);
		$this->db->where('fn_id', $id);
		$this->db->update('flash_news',$data);
		return true;
	}
	
	function getFlashnewsById($id){
		$sql = "SELECT * FROM flash_news WHERE fn_id= ".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function deleteFlash($id){
		$this->db->where('fn_id',$id);
		$this->db->delete('flash_news'); 
	}
	
}