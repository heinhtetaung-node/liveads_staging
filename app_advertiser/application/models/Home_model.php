<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	
	 function apiSearchFlashDealList($keywords, $limit){

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
					
		if($keywords!=""){
		$sql.= " AND (product.pro_description LIKE '%".$keywords."%' OR product.pro_title LIKE '%".$keywords."%' )"	;
		}				
						
		$sql.=" ORDER BY sort_pro_id DESC, product.pro_created DESC $limit ";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	function apiSearchPromotionList($keywords, $limit){

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
	
		$sql.= " ORDER BY  sort_pro_id DESC, product.pro_created DESC $limit";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	function apiSearchShopList($keywords,$limit){

		$sql = "SELECT DISTINCT
				customer.cu_logo,
				customer.cu_image_name,	
				customer.cu_name,
				customer.cu_description, 
				customer.cu_id,
				customer.cu_like_count
				FROM
				customer_tag
				INNER JOIN tag ON customer_tag.tg_id = tag.tg_id
				INNER JOIN customer ON customer_tag.cu_id = customer.cu_id
				WHERE
				customer.cu_status = 1 ";
		if($keywords!=""){
			$sql.= " AND tag.tg_name LIKE '%".$keywords."%' ";
		}		
		$sql.=" ORDER BY
				customer.cu_created DESC $limit ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	function apiSearchCouponList($keywords, $limit){

		$sql = "SELECT
				cp.cp_id,
				cp.cp_name, 
				cp.cp_description,
				cp.cp_img_name,
				cp.cp_like_count,
				cp_sub.cp_id as sort_cp_id
				FROM
				coupon as cp
				
				LEFT JOIN (
					SELECT cp_sub.cp_id from coupon as cp_sub where cp_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND cp_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as cp_sub 
				ON cp_sub.cp_id = cp.cp_id
				
				WHERE
				cp.cp_valid_from <= DATE(NOW())AND
				cp.cp_valid_to >= DATE(NOW()) AND cp.cp_status = 0 ";
		if($keywords!=""){
		$sql.= " AND (cp.cp_name LIKE '%".$keywords."%' OR cp.cp_description LIKE '%".$keywords."%' )";
		}		
		$sql.=" ORDER BY sort_cp_id DESC, cp.cp_created DESC $limit 
				";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return false;
	}
	
	function apiSearchEventList($keywords, $limit){

		$sql = "SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,
				`event`.ev_like_count,
				`event`.ev_img_name,
				event_sub.ev_id as sort_ev_id
				FROM
								`event`
				LEFT JOIN (
					SELECT event_sub.ev_id from `event` as event_sub where event_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND event_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as event_sub 
				ON event_sub.ev_id = `event`.ev_id
								
				WHERE
								`event`.ev_status = 0 AND
								`event`.ev_date >= DATE(NOW())";
		if($keywords!=""){
		$sql.= " AND (`event`.ev_title LIKE '%".$keywords."%' OR `event`.ev_description LIKE '%".$keywords."%' )";
		}						
		$sql.=" ORDER BY
				 sort_ev_id DESC, `event`.ev_created DESC $limit ";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	function apiSearchJobList($keywords, $limit){

		$sql = "SELECT
				job.jb_id,
				job.jb_name,
				job.jb_email,
				job.jb_phone,
				job.jb_description,
				job.jb_salary,
				job.jb_location,
				job.jb_like_count,
				job.jb_created,
				customer.cu_logo,
				customer.cu_logo_name,
				job_sub.jb_id as sort_job_id
				FROM
				job
				LEFT JOIN customer ON job.customer_id = customer.cu_id
				
				LEFT JOIN (
					SELECT job_sub.jb_id from `job` as job_sub where job_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND job_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as job_sub 
				ON job_sub.jb_id = job.jb_id
				
				WHERE
								`job`.jb_status = 0 AND
								`job`.jb_expired >= DATE(NOW())";
		if($keywords!=""){
		$sql.= " AND (job.jb_name LIKE '%".$keywords."%' OR job.jb_description LIKE '%".$keywords."%' )";	
		}						
		$sql.= " ORDER BY sort_job_id DESC, job.jb_id DESC $limit 
				";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	
	
	
	
	
	
	
	function apiPromotionProductGuideFinderList($order, $limit){

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
			
	
		$sql.= " $order $limit";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		return false;
	}
	
	function apiCouponGuideFinderList($order, $limit){

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
				cp.cp_valid_from <= DATE(NOW())AND
				cp.cp_valid_to >= DATE(NOW()) AND cp.cp_status = 0 ";
		$sql.=" $order $limit 
				";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return false;
	}
	
}