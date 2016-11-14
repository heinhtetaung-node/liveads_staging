<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon_Model extends CI_Model
{

	function addCoupon($data){
		$this->db->set('cp_created', 'NOW()', FALSE);
		$this->db->insert('coupon', $data);
		return true;
	}
	
	function getCoupons($keywords){

		$sql = "SELECT
				cp.cp_id,
				cp.cp_name,
				cp.cp_description,
				cp.cp_img_name,
				cp.cp_type,
				cp.cp_valid_from,
				cp.cp_valid_to,
				cp.cp_quantity,
				cp.cp_like_count,
				cp_sub.cp_id as sort_cp_id
				FROM
				coupon as cp
				
				LEFT JOIN (
					SELECT cp_sub.cp_id from coupon as cp_sub where cp_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND cp_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as cp_sub 
				ON cp_sub.cp_id = cp.cp_id
				
				WHERE
				(cp.cp_valid_from <= DATE(NOW())AND cp.cp_valid_to >= DATE(NOW()) AND cp.cp_type ='date') OR (cp.cp_quantity > cp.cp_usage AND cp.cp_type ='quantity') 
				 AND cp.cp_status = 0 ";
		if($keywords!=""){
		$sql.= " AND (cp.cp_name LIKE '%".$keywords."%' OR cp.cp_description LIKE '%".$keywords."%' )";
		}		
		$sql.=" ORDER BY sort_cp_id DESC, cp.cp_created DESC
				";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
	}
	
	function getCouponDetail($cp_id){
		$sql = "SELECT
				coupon.cp_id,
				coupon.cp_img_name,
				coupon.cp_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_from,
				coupon.cp_valid_to,
				coupon.cp_quantity,
				coupon.cp_type
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				coupon.cp_id =".$cp_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		return false;
	}
	
	function increaseCouponViewCount($cp_id){
		$sql = "UPDATE `coupon` SET `cp_total_viewer`= `cp_total_viewer` + 1 WHERE `cp_id`=".$cp_id;
		$query = $this->db->query($sql);
		
	 }
	 
	 function checkLike($user_id,$item_id){
		$sql = "SELECT 
				*
				FROM
				`like`
				WHERE
				`like`.like_user_id = ".$this->db->escape($user_id)." AND
				`like`.like_item_id = ".$this->db->escape($item_id)." AND
				`like`.like_type = 'coupon'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
	}
	
	
	
	
	function getBanner(){
		$sql = "SELECT
				banner_image.bi_coupon_url , banner.banner_link, banner.customer_id 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.coupon=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_coupon_url)){
					
					$pro_img[] = array(
						"image" =>  $img->bi_coupon_url,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,						
						);
				}
				
			}
			return $pro_img;
		}
	}

}