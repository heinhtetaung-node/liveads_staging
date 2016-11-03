<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_Model extends CI_Model
{
	function apiGetEvent($keywords){

	$now = date('Y-m-d');
		// $sql = "SELECT
// 				`event`.ev_id,
// 				`event`.ev_title,
// 				`event`.ev_location,
// 				`event`.ev_description,
// 				`event`.ev_date,
// 				`event`.ev_like_count,
// 				`event`.ev_img_name,
// 				event_sub.ev_id as sort_ev_id
// 				FROM
// 								`event`
// 				LEFT JOIN (
// 					SELECT event_sub.ev_id from `event` as event_sub where event_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND event_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
// 				) as event_sub 
// 				ON event_sub.ev_id = `event`.ev_id
// 								
// 				WHERE
// 								`event`.ev_status = 0 AND
// 								`event`.ev_date >= DATE(NOW())";

		$sql = "SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,
				`event`.ev_like_count,
				`event`.ev_img_name
				
				FROM
								`event`
				
				WHERE `event`.ev_status = 0 AND
								`event`.paid_ads_start_date <= '$now' AND `event`.paid_ads_end_date >= '$now'";
								
		if($keywords!=""){
		$sql.= " AND (`event`.ev_title LIKE '%".$keywords."%' OR `event`.ev_description LIKE '%".$keywords."%' )";
		}						
		$sql.=" ORDER BY `event`.ev_created DESC";

	log_message('error', $sql);
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	function apiGetEventDetail($ev_id){
		$sql = "SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,				
				`event`.ev_link,				
				`event`.ev_like_count,			
				`event`.ev_img_name as ev_img_base64
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
	
	function apiCheckLike($user_id,$item_id){
		
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
	
	function getEventById($ev_id){
		$sql = "SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,
				`event`.ev_link,
				`event`.ev_img_name,
				`event`.ev_like_count,
				`event`.customer_id,
				customer.cu_name,
				`event`.ev_status,
				`event`.paid_ads_start_date,
				`event`.paid_ads_end_date
				FROM
				`event`
				LEFT JOIN customer ON `event`.customer_id = customer.cu_id
				WHERE
								`event`.ev_id =". $ev_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function addEvent($data){
		$this->db->set('ev_created', 'NOW()', FALSE);
		$this->db->insert('event', $data);
		return true;
	}
	
	function updateEvent($id,$data){
		$this->db->where('ev_id',$id);
		$this->db->update('event',$data);
		return true;
	}
	
	function updateImage($id,$image){
		$this->db->where('ev_id', $id);
		$this->db->set('ev_img_base64', $this->db->escape($image));
		$this->db->update('event');
		return true;
	}
	
	function checkExpiredEvent(){
		$sql = "UPDATE event SET ev_status=1 WHERE ev_date < DATE(NOW())";
		$query = $this->db->query($sql);
		return true;
	}
	
	function deleteEvent($id){
		$this->db->select('ev_img_name');
		$this->db->where('ev_id', $id);
		$this->db->from('event');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			unlink('uploads/event/'.$image->ev_img_name);
		} 
		$this->db->where('ev_id', $id);
		$this->db->delete('event'); 
		
	}
	
	
	function getBanner(){
		$sql = "SELECT
				banner.banner_linkto ,banner_image.bi_event_url , banner.banner_link, banner.customer_id , banner.banner_email  
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
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_event_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_event_url);
					$hex_string = base64_encode($bin_string);
					
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_event_url),
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