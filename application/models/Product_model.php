<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
		
	function getPromotionList($keywords){

		$sql = "SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_created,
				product.pro_like_count,
				product.pro_image_name,
				product_sub.pro_id AS sort_pro_id,
				customer.cu_name
				FROM
				product
				LEFT JOIN (
									SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
								) AS product_sub ON product_sub.pro_id= product.pro_id
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1";
		if($keywords!=""){
		$sql.= " AND (product.pro_description LIKE '%".$keywords."%' OR product.pro_title LIKE '%".$keywords."%' ) "	;
		}				
	
		$sql.= " ORDER BY  sort_pro_id DESC, product.pro_created DESC ";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	
	function getProductDetail($pro_id){
		$sql = "SELECT
				product.pro_id,
				product.pro_quantity,
				product.pro_title,
				product.pro_price,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_like_count,
				product.pro_description,
				product.pro_is_deal,
				product.pro_is_promotion,
				product.customer_id,
				customer.cu_email
				FROM
				product
				INNER JOIN customer ON customer.cu_id = product.customer_id
				WHERE	
				product.pro_expired_date >= DATE(NOW()) AND
				product.pro_id =". $this->db->escape_str($pro_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function getProImage($pro_id){
		$sql = "SELECT
				product_image.pro_img_name
				FROM
				product_image
				WHERE
				product_image.pro_id = ". $this->db->escape_str($pro_id);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			return $row;
		}
	}
	
	
	
	function getHomeTopBanner(){
		$sql = "SELECT
				banner_image.bi_home_first_url , banner.banner_link, banner.customer_id 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.home_top=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_home_first_url)){
					$pro_img[] = array(
						"image" =>  "/app_liveads88/uploads/banner/".$img->bi_home_first_url,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,						
						);
				}
				
			}
			return $pro_img;
		}
	}
	
	
	function getHomeBottomBanner(){
		$sql = "SELECT
				banner_image.bi_home_second_url , banner.banner_link, banner.customer_id 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.home_bottom=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd() . '/app_liveads88/uploads/banner/';
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_home_second_url)){
					
					$pro_img[] = array(
						"image" =>  "/app_liveads88/uploads/banner/".$img->bi_home_second_url,
						"link" => $img->banner_link,	
						"shop_id" => $img->customer_id,
						);
				}
			}
			return $pro_img;
		}
	}
	
	
	function getPromotionBanner(){
		$sql = "SELECT
				banner_image.bi_promotion_url , banner.banner_link, banner.customer_id 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.promotion = 1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_promotion_url)){
					
					$pro_img[] = array(
						"image" =>  $img->bi_promotion_url,
						"link" => $img->banner_link,	
						"shop_id" => $img->customer_id,	
						);
				}
				
			}
			return $pro_img;
		}
	}
	
	function apiGetBrands(){
		$logo_array = array();
		
		$sql = "SELECT
				cu_id, cu_logo_name, cu_website 
				FROM
				customer where cu_logo_name!='' ORDER BY `cu_created` DESC ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			foreach ($row as $logo){
				$targetPath = getcwd() . '/uploads/brand/';
				if(file_exists(getcwd()."/app_liveads88/uploads/brand/".$logo->cu_logo_name)){
					$logo_array[] = array('shop_id'=>$logo->cu_id, 'shop_website'=>$logo->cu_website, 'image'=>'/app_liveads88/uploads/brand/'.$logo->cu_logo_name );
				}
			}
			
		}
		return $logo_array;
	}
		
	function apiGetActiveUser(){
	  $sql = "SELECT * FROM active_user ORDER BY id ASC limit 1 ";
	  $query = $this->db->query($sql);
	  if($query->num_rows() > 0)
	  {
	   $row = $query->row();
	   
	   	$current_active_user = $row->active_user;
		
		if($current_active_user < 120){
			$current_active_user = 120;
		}

	   
	   if(time() - $row->created > 60){
		//update active user
		$start_param = rand(1,2);
		$end_param   = rand(1,2);
		
		//if($start_param == 1){
		// $start_param = $current_active_user;
		//}else {
		 $start_param = ($current_active_user > 10 ? ($current_active_user - rand(1,9)) : $current_active_user);
		//}
		
		//if($end_param == 1){
		// $end_param = $current_active_user;
		//}else {
		 $end_param = $current_active_user + rand(1,9);
		//}
		
		$active_user_param = rand($start_param, $end_param);
		
		$sql = "UPDATE `active_user` SET `start_number`=$start_param, `end_number`=$end_param, `active_user`=$active_user_param, `created`=".time()." WHERE `id`=".$row->id;
		$query = $this->db->query($sql);
		
		$ret = array('start_number'=> (int)$start_param, 'end_number'=> (int)$end_param, 'active_user'=> $active_user_param ); 
		return $ret;
		
	  }else{
	   $ret = array('start_number'=> (int)$row->start_number, 'end_number'=> (int)$row->end_number, 'active_user'=> $row->active_user ); 
	   return $ret;
	  }
	   
	  }
	 }
	 
	 function apiIncreaseProductViewCount($pid){
		$sql = "UPDATE `product` SET `pro_total_viewer`= `pro_total_viewer` + 1 WHERE `pro_id`=".$pid;
		$query = $this->db->query($sql);
		
	 }
	 
	 
	 function apiGetFlashNews(){
		$sql = "SELECT
				flash_news.fn_text
				FROM
				flash_news
				WHERE fn_expired >= DATE(NOW())";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			
			foreach ($row as $fn){
				$fnews[] = $fn->fn_text;
			}
			return $fnews;
		}
	}
}