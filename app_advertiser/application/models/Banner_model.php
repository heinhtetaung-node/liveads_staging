<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner_Model extends CI_Model
{
	
	
	function getBannerById($id){
		$sql = "SELECT
				customer.cu_name,
				banner.*, banner_image.*
				FROM
				`banner`	
				JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id
				LEFT JOIN customer ON banner.customer_id = customer.cu_id
				WHERE banner_id =". $id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}

	function addBanner($data){
		$this->db->set('banner_created', 'NOW()', FALSE);
		$this->db->set('banner_updated', 'NOW()', FALSE);
		$this->db->insert('banner', $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	
	function addBannerImages($banner_id, $home_first_image, $home_second_image, $deal_image, $coupon_image, $promotion_image, $event_image, $job_image){
		$data = array(
				'bi_banner_id'=>$banner_id,
				'bi_home_first_url'=>$home_first_image,
				'bi_home_second_url'=>$home_second_image,
				'bi_deal_url'=>$deal_image,
				'bi_coupon_url'=>$coupon_image,
				'bi_promotion_url'=>$promotion_image,
				'bi_event_url'=>$event_image,
				'bi_job_url'=>$job_image,
				);	
		$this->db->insert('banner_image', $data);
	}
	
	function updateBannerImages($banner_id, $home_first_image, $home_second_image, $deal_image, $coupon_image, $promotion_image, $event_image, $job_image){
		$data = array(
				'bi_home_first_url'=>$home_first_image,
				'bi_home_second_url'=>$home_second_image,
				'bi_deal_url'=>$deal_image,
				'bi_coupon_url'=>$coupon_image,
				'bi_promotion_url'=>$promotion_image,
				'bi_event_url'=>$event_image,
				'bi_job_url'=>$job_image,
				);	
		$this->db->where('bi_banner_id',$banner_id);
		$this->db->update('banner_image',$data);
		return true;
	}
	
	function updateBanner($id,$data){
		$this->db->set('banner_updated', 'NOW()', FALSE);
		$this->db->where('banner_id',$id);
		$this->db->update('banner',$data);
		return true;
	}
	
		
	function deleteBanner($id){
		
		$this->db->select('banner_image_name');
		$this->db->where('banner_id', $id);
		$this->db->from('banner');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			if (file_exists('uploads/banner/'.$image->banner_image_name) && $image->banner_image_name != '')
			unlink('uploads/banner/'.$image->banner_image_name);
		} 
		
		$this->db->where('banner_id', $id);
		$this->db->delete('banner'); 
		
	}
	
	

}