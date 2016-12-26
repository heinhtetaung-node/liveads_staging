<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_Model extends CI_Model
{
	function getEvents($keywords){

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
				INNER JOIN (
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
				 sort_ev_id DESC, `event`.ev_created DESC";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	function getEventDetail($ev_id){
		$sql = "SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,				
				`event`.ev_link,				
				`event`.ev_like_count,			
				`event`.ev_img_name 
				FROM
				`event`
				WHERE
				`event`.ev_status = 0 AND
				`event`.ev_date >= DATE(NOW()) AND
				`event`.ev_id =". $ev_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	
	}
	
	function checkLike($user_id,$item_id){
		
		$sql = "SELECT 
				*
				FROM
				`like`
				WHERE
				`like`.like_user_id = ".$user_id." AND
				`like`.like_item_id = ".$item_id." AND
				`like`.like_type = 'event'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
		
	}
	
	
	function checkExpiredEvent(){
		$sql = "UPDATE event SET ev_status=1 WHERE ev_date < DATE(NOW())";
		$query = $this->db->query($sql);
		return true;
	}
	
	function getBanner(){
		$sql = "SELECT
				banner_image.bi_event_url , banner.banner_link, banner.customer_id 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.event=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_event_url)){
					
					$pro_img[] = array(
						"image" =>  $img->bi_event_url,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,		
						);
				}
				
			}
			return $pro_img;
		}
	}
	
}