<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
	function apiGetFlashDealList($order_mood){
/*
		$sql = "SELECT
				product.pro_id,
				product.pro_description,
				product.pro_price,
				product.pro_discount_type,				
				product.pro_discount_amount,				
				product.pro_quantity,
				product.pro_created,
				product.pro_like_count,
				product.pro_image_base64
				FROM
				product
				WHERE
				product.pro_expired_date >= DATE(NOW()) AND product.pro_is_deal = 1 ORDER BY product.pro_created DESC ";
*/

	$sql ="SELECT
				product.*,
				product_sub.pro_id as sort_pro_id,
				customer.cu_email
				FROM
				product
				INNER JOIN customer ON customer.cu_id = product.customer_id
				LEFT JOIN (
					SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as product_sub 
				ON product_sub.pro_id = product.pro_id
				WHERE
				product.pro_expired_date >= DATE(NOW()) AND product.pro_is_deal = 1 ";
				
	//if($keywords!=""){
	//$sql.= " AND (product.pro_description LIKE '%".$keywords."%' OR product.pro_title LIKE '%".$keywords."%' )"	;
//	}				
	
		
	$sql.=" $order_mood ";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	
	function apiGetPromotionList($keywords){

		$now = date('Y-m-d');
		
		// $sql = "SELECT
// 				product.pro_id,
// 				product.pro_description,
// 				product.pro_title,
// 				product.pro_price,
// 				product.pro_discount_type,
// 				product.pro_discount_amount,
// 				product.pro_quantity,
// 				product.pro_created,
// 				product.pro_like_count,
// 				product.pro_image_name,
// 				product_sub.pro_id AS sort_pro_id,
// 				customer.cu_name
// 				FROM
// 				product
// 				LEFT JOIN (
// 									SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
// 								) AS product_sub ON product_sub.pro_id= product.pro_id
// 				LEFT JOIN customer ON product.customer_id = customer.cu_id
// 				WHERE
// 								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1";

		$sql = "SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_price_text,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_created,
				product.pro_like_count,
				product.pro_image_name,
				
				customer.cu_name
				FROM
				product
				
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.paid_ads_start_date <= '$now' AND product.paid_ads_end_date >= '$now'
				AND 
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1";
								 
		if($keywords!=""){
		$sql.= " AND (product.pro_description LIKE '%".$keywords."%' OR product.pro_title LIKE '%".$keywords."%' ) "	;
		}				
	
		$sql.= " ORDER BY  product.pro_created DESC ";

		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	
	function apiGetShopPromotionList($shop_id){

		if ($shop_id != '') {
		$sql = "SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_price_text,
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
					
		if($shop_id!=""){
			$sql.= " AND product.customer_id = $shop_id ";
		}	
		
		$sql.= " ORDER BY  sort_pro_id DESC, product.pro_created DESC ";

		log_message('error', $sql);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		}
		else {
			log_message('error', 'no shop_id');
			return array();
			
		}
	}
	
	
	function apiGetProductDetail($pro_id){
		$sql = "SELECT
				product.pro_id,
				product.pro_quantity,
				product.pro_title,
				product.pro_price,
				product.pro_price_text,
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
	
	function apiAddGetItNow($data){
		$this->db->set('gn_created', 'NOW()', FALSE);
		$this->db->set('user_id',  $this->db->escape_str($data['user_id']));
		$this->db->set('product_id',  $this->db->escape_str($data['id']));
		$this->db->set('gn_qty',  $this->db->escape_str($data['qty']));
		$this->db->insert('getitnow_list');
		return true;
	}
	
	function checkExpiredproduct(){
		$sql = "UPDATE product SET pro_status=1 WHERE pro_expired_date < DATE(NOW())";
		$query = $this->db->query($sql);
		return true;
	}
	
	function apiProImage($pro_id){
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
			
			foreach ($row as $img){
				$targetPath = getcwd();
				$bin_string = file_get_contents($targetPath."/".$img->pro_img_name);
				$hex_string = base64_encode($bin_string);
				$pro_img[] = $hex_string;
			}
			return $pro_img;
		}
	}
	
	function apiProImageURL($pro_id){
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
			
			foreach ($row as $img){
				if(file_exists(getcwd()."/".$img->pro_img_name)){
					$pro_img[] = urlencode("/".$img->pro_img_name);
				}
			}
			return $pro_img;
		}
	}
	
	function apiCheckLike($user_id,$item_id){
		
		$sql = "SELECT 
				*
				FROM
				`like`
				WHERE
				`like`.like_user_id = ".$user_id." AND
				`like`.like_item_id = ".$item_id." AND
				`like`.like_type = 'product'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
		
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

	
	function addProduct($data){
		$this->db->set('pro_created', 'NOW()', FALSE);
		$this->db->insert('product', $data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	function updateProduct($id,$data){
		$this->db->where('pro_id', $id);
		$this->db->update('product',$data);
		return true;
	}
	
	function updateImage($id,$image){
		$this->db->where('pro_id', $id);
		$this->db->set('pro_img_base64', $image);
		$this->db->update('product');
		return true;
	}
	
	function getProductById($id){
		$sql = "SELECT
				customer.cu_name,
				product.pro_id,
				product.purchase_itemid,
				product.livestatus,
				product.ispurchased,
				product.customer_id,
				product.pro_title,
				product.pro_image_base64,
				product.pro_price,
				product.pro_price_text,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_description,
				product.pro_is_deal,
				product.pro_is_promotion,
				product.pro_surprise_marked,
				product.pro_like_count,
				product.pro_image_name,
				product.pro_expired_date,
				product.paid_ads_start_date,
				product.paid_ads_end_date
				FROM
				product
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.pro_id  =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	
	function getHomeTopBanner(){
		$sql = "SELECT
				banner.banner_linkto ,banner_image.bi_home_first_url , banner.banner_link, banner.customer_id , banner.banner_email  
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				
				WHERE banner.home_top=1 order by banner.sequence asc";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_home_first_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_home_first_url);
					$hex_string = base64_encode($bin_string);
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_home_first_url),
// 						"image" =>  $hex_string,
						"link_to" => $img->banner_linkto,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,						
						"email" => $img->banner_email,						
						);
				}
				
			}
			return $pro_img;
		}
	}
	
	
	
	function getHomeBottomBanner(){
		$sql = "SELECT
				banner.sequence, banner.banner_linkto ,banner_image.bi_home_second_url , banner.banner_link, banner.customer_id , banner.banner_email  
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.home_bottom=1  order by banner.sequence asc";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_home_second_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_home_second_url);
					$hex_string = base64_encode($bin_string);
					
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_home_second_url),
// 						"image" =>  $hex_string,
						"link_to" => $img->banner_linkto,	
						"link" => $img->banner_link,	
						"shop_id" => $img->customer_id,
						"email" => $img->banner_email,
						);
				}
			}
			return $pro_img;
		}
	}
	
	
	
	function getPromotionBanner(){
		$sql = "SELECT
				banner.banner_linkto ,banner_image.bi_promotion_url , banner.banner_link, banner.customer_id , banner.banner_email,  
				banner.sequence FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.promotion = 1  order by banner.sequence asc";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_promotion_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_promotion_url);
					$hex_string = base64_encode($bin_string);
					
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_promotion_url),
// 						"image" =>  $hex_string,
						"link_to" => $img->banner_linkto,	
						"link" => $img->banner_link,	
						"shop_id" => $img->customer_id,	
						"email" => $img->banner_email,	
						);
				}
				
			}
			return $pro_img;
		}
	}
	
	
	function apiGetBrands(){
		$sql = "SELECT
				cu_id, cu_logo_name, cu_website 
				FROM
				customer where cu_logo_name!='' and cu_show_brand = 1 ORDER BY cu_created DESC ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row = $query->result();
			foreach ($row as $logo){
				$targetPath = getcwd() . '/uploads/brand/';
				if(file_exists($targetPath.$logo->cu_logo_name)){
					$bin_string = file_get_contents($targetPath.$logo->cu_logo_name);
					$hex_string = base64_encode($bin_string);
					$logo_array[] = array('shop_id'=>$logo->cu_id, 'shop_website'=>$logo->cu_website, 
					'image_url'=>urlencode('/uploads/brand/'.$logo->cu_logo_name)
// 					'image'=>$hex_string
					 );
				}
			}
			return $logo_array;
		}
	}
		
	function addProductImage($id,$img_name){
		$this->db->set('pro_img_name', $img_name);
		$this->db->set('pro_id', $id);
		$this->db->insert('product_image');
	}
	
	function deleteProduct($id){
		$this->db->select('pro_image_name');
		$this->db->where('pro_id', $id);
		$this->db->from('product');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			unlink('uploads/product/'.$image->pro_image_name);
		} 
		$path = 'upload/files/'.$id;
		$this->deletedir($path);
		
		$this->db->where('pro_id', $id);
		$this->db->delete('product_image');
		
		$this->db->where('pro_id', $id);
		$this->db->delete('product');
	}
	
	
	public function deletedir($path) { 
		if(!empty($path) && is_dir($path) ){
        $dir  = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS); //upper dirs are not included,otherwise DISASTER HAPPENS :)
        $files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $f) {if (is_file($f)) {unlink($f);} else {$empty_dirs[] = $f;} } if (!empty($empty_dirs)) {foreach ($empty_dirs as $eachDir) {rmdir($eachDir);}} rmdir($path);
    }

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
}