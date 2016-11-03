<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adscomponent_Model extends CI_Model
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
	
	function getAdsById($id){
		$this->db->select('*');
		$this->db->where('adscomponent_id', $id);
		$this->db->from('adscomponent');
		$query = $this->db->get();   
		return $query->row();
	}
	
	function getAdsPriceById($id){
		$this->db->select('*');
		$this->db->where('adscomponent_id', $id);
		$this->db->from('adscomponent_price');
		$query = $this->db->get();   
		return $query->result_array();
	}
	
	
	function addAds($data){
		$this->db->set('created', 'NOW()', FALSE);
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->insert('adscomponent', $data);
		return $this->db->insert_id();
	}
	
	function updateAds($data, $id){
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->where('adscomponent_id',$id);
		$this->db->update('adscomponent',$data);
		return true;
	}
	
	function addAdsPrice($data){
		$this->db->set('created', 'NOW()', FALSE);
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->insert('adscomponent_price', $data);
		return true;
	}
	
	function updateAdsPrice($data, $id){
		$this->db->set('modified', 'NOW()', FALSE);
		$this->db->where('price_id',$id);
		$this->db->update('adscomponent_price',$data);
		return true;
	}
	
	function deleteAdsPrice($id){			
		$this->db->where('price_id', $id);
		$this->db->delete('adscomponent_price'); 
		return true;
	}
	
	function deleteAds($id){
		$ads=$this->getAdsById($id);	
		unlink('uploads/adscomponent/'.$ads->previewphoto_m);
		
		$adsprice=$this->getAdsPriceById($id);
		foreach($adsprice as $p){
			$this->db->where('price_id', $p['price_id']);
			$this->db->delete('adscomponent_price'); 
		}
		
		$this->db->where('adscomponent_id', $id);
		$this->db->delete('adscomponent'); 
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
	
	function getAllAdsComponent(){
		$sql='SELECT a.adscomponent_id, a.adsname, a.description, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id
		GROUP BY a.adscomponent_id';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
}