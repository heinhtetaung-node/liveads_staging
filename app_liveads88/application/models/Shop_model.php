<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_Model extends CI_Model
{
	function apiGetShop($keywords,$id){

		$sql = "SELECT DISTINCT
				customer.cu_logo,
				customer.cu_image_name,	
				customer.cu_name,
				customer.cu_id,
				customer.cu_like_count,
				customer.cu_website
				FROM
				customer_tag
				INNER JOIN tag ON customer_tag.tg_id = tag.tg_id
				INNER JOIN customer ON customer_tag.cu_id = customer.cu_id
				WHERE
				customer.cu_status = 1 ";
		if($keywords!=""){
		$sql.= " AND tag.tg_name LIKE '%".$keywords."%' ";
		}
	if($id!="" && $id != 10){
		$sql.= " AND customer.category_id = $id ";
		}			
		$sql.=" ORDER BY
				customer.cu_created DESC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	function apiGetShopDetail($cu_id){
		$sql = "SELECT
				customer.cu_id,
				customer.cu_name,				
				customer.cu_image_name,				
				customer.cu_address,
				customer.cu_description,
				customer.cu_mobile,
				customer.cu_email,
				customer.cu_postal,
				customer.cu_lat,
				customer.cu_long,
				customer.cu_website,
				customer.cu_like_count,
				customer.cu_branch,
				customer.cu_hour,
				customer.cu_logo,
				customer.cu_service_type
				FROM
				customer
				WHERE
				customer.cu_status = 1 AND
				customer.cu_id =". $this->db->escape_str($cu_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function apiGetShopFlyer($cu_id){
		$sql = "SELECT
				shop_flyer.spf_id
				FROM
				customer
				INNER JOIN shop_flyer ON shop_flyer.cu_id = customer.cu_id
				WHERE
				customer.cu_id = ". $this->db->escape_str($cu_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $fly){
				$flyer[] = $fly->spf_id;
			}
			return $flyer;
		}
	}
	
	function apiGetFlyer($cu_id,$flyer_id){
		$sql = "SELECT
				shop_flyer.spf_name,
				shop_flyer.cu_id
				FROM
				shop_flyer
				WHERE
				shop_flyer.spf_id = ". $this->db->escape_str($flyer_id)." AND
				shop_flyer.cu_id = ". $this->db->escape_str($cu_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	
	function apiCheckLike($user_id,$item_id){
		
		$sql = "SELECT 
				*
				FROM
				`like`
				WHERE
				`like`.like_user_id = ". $this->db->escape_str($user_id)." AND
				`like`.like_item_id = ". $this->db->escape_str($item_id)." AND
				`like`.like_type = 'shop'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
		
	}
	
	
	function getBanner($shop_id){
		$sql = "SELECT
				sp_name
				FROM
				shop_image
				WHERE
				cu_id = ". $this->db->escape_str($shop_id)." ORDER BY sort_order ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $img){
				$targetPath = getcwd();
				$bin_string = file_get_contents($targetPath."/".$img->sp_name);
				$hex_string = base64_encode($bin_string);
				$pro_img[] = $hex_string;
			}
			return $pro_img;
		}
	}
	
	function getBannerURL($shop_id){
		$sql = "SELECT
				sp_name
				FROM
				shop_image
				WHERE
				cu_id = ". $this->db->escape_str($shop_id)." ORDER BY sort_order ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $img){
				if(file_exists(getcwd()."/".$img->sp_name)){
					$pro_img[] = urlencode("/".$img->sp_name);
				}		
			}
			return $pro_img;
		}
	}
	
	
	function apiGetCategory(){
		$sql = "SELECT
				*
				FROM
				category
				ORDER BY category.order DESC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd()."/uploads/category/";
				$hex_string="";
				$category_icon_url="";
				if(file_exists($targetPath.$img->icon_image_name)){
					$bin_string = file_get_contents($targetPath."/".$img->icon_image_name);
					$hex_string = base64_encode($bin_string);
					$category_icon_url = urlencode("/uploads/category/".$img->icon_image_name);
				}
				
				
				
					
				$pro_img[] = array(
					"category_id" =>  $img->id,
					"name" =>  $img->name,
					"category_icon_url" => $category_icon_url,
					//"category_icon" => $hex_string,		
					);
				
			}
			
			return $pro_img;
		}
	}
	
	
	
	function apiGetShopAlbum($shop_id){
		$sql = "SELECT
				sa_name
				FROM
				shop_album
				WHERE
				cu_id = ". $this->db->escape_str($shop_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $img){
				$targetPath = getcwd();
				$bin_string = file_get_contents($targetPath."/".$img->sa_name);
				$hex_string = base64_encode($bin_string);
				$album_img[] = $hex_string;
			}
			return $album_img;
		}
	}
	
	function apiGetShopAlbumURL($shop_id){
		$sql = "SELECT
				sa_name
				FROM
				shop_album
				WHERE
				cu_id = ". $this->db->escape_str($shop_id)." order by sort_order asc";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $img){
				
				if(file_exists(getcwd()."/".$img->sa_name)){
					$album_img[] = urlencode("/".$img->sa_name);
				}
				
			}
			return $album_img;
		}
	}
	
}