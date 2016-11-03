<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon_Model extends CI_Model
{
	
	
	function addCoupon($data){
		$this->db->set('cp_created', 'NOW()', FALSE);
		$this->db->insert('coupon', $data);
		return true;
	}
	
	function getcouponById($cp_id){
		$sql = "SELECT
				`coupon`.*,
				customer.cu_name
				FROM
				`coupon`
				LEFT JOIN customer ON `coupon`.customer_id = customer.cu_id
				WHERE
				`coupon`.cp_id =". $cp_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		return false;
	}
	
	function updateCoupon($id,$data){
		$this->db->where('cp_id', $id);
		$this->db->update('coupon',$data);
		if($this->db->affected_rows() > 0){
			return true;
		}
		return false;		
	}
	
	
	function deleteCoupon($id){
		$this->db->select('cp_img_name');
		$this->db->where('cp_id', $id);
		$this->db->from('coupon');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			unlink('uploads/coupon/'.$image->cp_img_name);
		} 
		
		$this->db->where('cp_id', $id);
		$this->db->delete('coupon'); 
		
	}
	
	
	//API Function below
	
	function apiGetCoupon($keywords){

		$sql = "SELECT
				cp.cp_id,
				cp.cp_img_name,
				cp.cp_like_count,
				cp_sub.cp_id as sort_cp_id
				FROM
				coupon as cp
				
				
				LEFT JOIN (
					SELECT cp_sub.cp_id from coupon as cp_sub where cp_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND cp_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as cp_sub 
				ON cp_sub.cp_id = cp.cp_id
				
				inner join customer on customer.cu_id = cp.customer_id
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
	
	function apiGetCouponDetail($cp_id){
		$sql = "SELECT
				coupon.cp_id,
				coupon.cp_name,
				coupon.cp_img_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_to,
				coupon.cp_quantity
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				(coupon.cp_valid_from <= DATE(NOW())AND coupon.cp_valid_to >= DATE(NOW()) AND coupon.cp_type ='date') OR (coupon.cp_quantity > coupon.cp_usage AND coupon.cp_type ='quantity')
				AND coupon.cp_id =".$cp_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function apiIncreaseCouponViewCount($cp_id){
		$sql = "UPDATE `coupon` SET `cp_total_viewer`= `cp_total_viewer` + 1 WHERE `cp_id`=".$cp_id;
		$query = $this->db->query($sql);
		
	 }
	
	function apiAddCoupon($data){
		$this->db->set('redeem_date', 'NOW()', FALSE);
		$this->db->set('user_id',  $this->db->escape_str($data['user_id']));
		$this->db->set('cp_id',  $this->db->escape_str($data['id']));
		$this->db->insert('coupon_usage');
		
		//update coupon table cp_usage
		$this->db->set('cp_usage', 'cp_usage+ 1', FALSE);
		$this->db->where('cp_id', $data['id']);
		$this->db->update('coupon');
		return true;
	}
	
	
	
	function apicheckCoupon($id,$code){
		$sql = "SELECT
				*
				FROM
				coupon AS cp
				WHERE
				cp.cp_valid_from <= DATE(NOW())AND
				cp.cp_valid_to >= DATE(NOW()) AND cp.cp_status = 0 AND cp.cp_usage < cp.cp_quantity AND
				cp.cp_code = '". $this->db->escape_str($code)."' AND cp.cp_id=". $this->db->escape_str($id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){			
			return true;
		}else{
			return false;	
		}
	}
	
	function apicheckUserUsage($user_id,$id){
		$sql = "SELECT
				coupon_usage.cpu_id
				FROM
				coupon_usage
				WHERE
				coupon_usage.cp_id = ". $this->db->escape_str($id)." AND
				coupon_usage.user_id = ". $this->db->escape_str($user_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
	}
	
	function apiCheckLike($user_id,$item_id){
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
	function checkExpiredCoupon(){
		$sql = "UPDATE coupon SET cp_status=1 WHERE cp_valid_to < DATE(NOW())";
		$query = $this->db->query($sql);
		return true;
	}
	
	
	function getBanner(){
		$sql = "SELECT
				banner.banner_linkto ,banner_image.bi_coupon_url , banner.banner_link, banner.customer_id , banner.banner_email  
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
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_coupon_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_coupon_url);
					$hex_string = base64_encode($bin_string);
					
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_coupon_url),
						"link_to" =>  $img->banner_linkto,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,						
						"email" => $img->banner_email,						
						);
				}
				
			}
			return $pro_img;
		}
	}
	

}