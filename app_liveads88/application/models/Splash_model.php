<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Splash_Model extends CI_Model
{
	
	
	function getSplashById($sp_id){
		$sql = "SELECT
				splash_image.spimg_name,
				splash_image.spimg_image_name,
				splash_image.spimg_image_base64,
				splash_image.spimg_linkto,
				splash_image.spimg_website,
				splash_image.spimg_name,
				splash_image.spimg_id,
				splash_image.spimg_status,
				splash_image.spimg_email,
				splash_image.spimg_customer_id,
				customer.cu_name
				
				FROM
				`splash_image`
				LEFT JOIN customer ON customer.cu_id = splash_image.spimg_customer_id	
				WHERE
								`splash_image`.spimg_id =". $sp_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function addSplash($data){
		$this->db->set('spimg_created', 'NOW()', FALSE);
		$this->db->set('spimg_modified', 'NOW()', FALSE);
		$this->db->insert('splash_image', $data);
		return true;
	}
	
	function updateSplash($id,$data){
		$this->db->set('spimg_modified', 'NOW()', FALSE);
		$this->db->where('spimg_id',$id);
		$this->db->update('splash_image',$data);
		return true;
	}
	

	
	function deleteSplash($id){
		$this->db->where('spimg_id', $id);
		$this->db->delete('splash_image'); 
		
	}
	
	
}