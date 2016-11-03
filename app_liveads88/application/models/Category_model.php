<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_Model extends CI_Model
{
	
	
	function getCategoryById($id){
		$sql = "SELECT
				*
				FROM
				`category`				
				WHERE  id=". $id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function addCategory($data){
		$this->db->set('created', 'NOW()', FALSE);
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->insert('category', $data);
		return true;
	}
	
	function updateCategory($id,$data){
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->where('id',$id);
		$this->db->update('category',$data);
		return true;
	}
	

	
	function deleteCategory($id){
		$this->db->select('icon_image_name');
		$this->db->where('id', $id);
		$this->db->from('category');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			unlink('uploads/category/'.$image->icon_image_name);
		} 
		$this->db->where('id', $id);
		$this->db->delete('category'); 
		
	}
	
	
}