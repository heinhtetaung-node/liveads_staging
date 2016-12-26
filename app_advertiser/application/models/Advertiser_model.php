<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertiser_model extends CI_Model
{
	
	public function getNavi(){		
		$cu_id=$this->session->userdata('cu_id');
		$sql=sprintf("
			SELECT i.*, a.adsname FROM `purchaseads_items` i
			INNER JOIN adscomponent a ON
			a.adscomponent_id=i.adscomponent_id 
			WHERE i.customer_id=%d
			GROUP BY i.adscomponent_id	
		",$cu_id);
		$query = $this->db->query($sql);
		return $query->result_array();		
	}
	
	public function getads($adsname, $table, $orderkey){
		$cu_id=$this->session->userdata('cu_id');
				
		$sql=sprintf("
			SELECT 
				ads.*,
				a.adsname,
				cu.cu_name, 
				p.created_at, 
				pr.price, 
				pr.price_unit, 
				pr.days
			FROM `%s` ads
				LEFT JOIN customer cu
				ON ads.customer_id=cu.cu_id
				INNER JOIN purchaseads_payment p
				ON ads.payment_id=p.payment_id
				INNER JOIN purchaseads_items pi
				ON ads.purchase_itemid=pi.item_id
				INNER JOIN adscomponent_price pr
				ON pi.selectedpriceid=pr.price_id
				INNER JOIN adscomponent a
				ON pi.adscomponent_id=a.adscomponent_id
			WHERE 
				ads.ispurchased=1 AND
				ads.customer_id=%d AND
				a.adsname='%s'
			ORDER BY %s DESC
			", $table, $cu_id, $adsname, $orderkey);
		
		$query = $this->db->query($sql);
		return $query->result_array();		
	}
}