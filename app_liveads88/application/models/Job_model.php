<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_Model extends CI_Model
{
	function apiGetJob($keywords){

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
				customer.cu_logo_name,
				customer.cu_name,
				customer.cu_mobile,
				customer.cu_email,
				customer.cu_description,
				customer.cu_website,
				customer.cu_long,
				customer.cu_lat,
				customer.cu_address,
				customer.cu_postal,
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
		$sql.= " ORDER BY sort_job_id DESC, job.jb_id DESC
				";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
	}
	
	function apiGetjobDetail($jb_id){
		$sql = "SELECT
				job.jb_id,
				job.jb_name,
				job.jb_description,
				job.jb_email,
				job.jb_phone,
				job.jb_salary,
				job.jb_location,
				job.jb_like_count,
				job.jb_created,
				customer.cu_logo_name,
				customer.cu_name,
				customer.cu_mobile,
				customer.cu_email,
				customer.cu_description,
				customer.cu_website,
				customer.cu_long,
				customer.cu_lat,
				customer.cu_address,
				customer.cu_postal
				FROM
				job
				LEFT JOIN customer ON job.customer_id = customer.cu_id
				WHERE
								`job`.jb_status = 0 AND
								`job`.jb_expired >= DATE(NOW()) AND `job`.jb_id=". $jb_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	
	}
	
	function apiJobApply($data){
		$this->db->set('jbp_created', 'NOW()', FALSE);
		$this->db->set('user_id',  $this->db->escape_str($data['user_id']));
		$this->db->set('job_id',  $this->db->escape_str($data['id']));
		$this->db->insert('job_apply');
		return true;
		
	}
	
	function apiCheckLike($user_id,$item_id){
		
		$sql = "SELECT 
				*
				FROM
				`like`
				WHERE
				`like`.like_user_id = ".$user_id." AND
				`like`.like_item_id = ".$item_id." AND
				`like`.like_type = 'job'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{			
			return true;
		}else{
			return false;	
		}
		
	}
	
	
	function checkExpiredjob(){
		$sql = "UPDATE job SET jb_status=1 WHERE jb_date < DATE(NOW())";
		$query = $this->db->query($sql);
		return true;
	}
	
	function addJob($data){
		$this->db->set('jb_created', 'NOW()', FALSE);
		$this->db->set('jb_modified', 'NOW()', FALSE);
		$this->db->insert('job', $data);
		return true;
	}
	
	function updateJob($id,$data){
		$this->db->set('jb_modified', 'NOW()', FALSE);
		$this->db->where('jb_id', $id);
		$this->db->update('job',$data);
		return true;
	}
	
	function getJobById($id){
		$sql = "SELECT
				customer.cu_name,
				job.jb_id,
				job.livestatus,
				job.ispurchased,
				job.purchase_itemid,
				job.customer_id,
				job.jb_name,
				job.jb_email,
				job.jb_phone,
				job.jb_description,
				job.jb_salary,
				job.jb_location,
				job.jb_like_count,
				job.jb_expired,
				job.jb_created,
				job.jb_modified,
				job.jb_status,
				job.paid_ads_start_date,
				job.paid_ads_end_date
				FROM
				job
				LEFT JOIN customer ON job.customer_id = customer.cu_id
				WHERE
				job.jb_id =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
	
	function deleteJob($id){
		$this->db->where('jb_id',$id);
		$this->db->delete('job'); 
	}
	
	
	function getBanner(){
		$sql = "SELECT
				banner.banner_linkto ,banner_image.bi_job_url , banner.banner_link, banner.customer_id , banner.banner_email 
				FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.job=1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{

			$row = $query->result();
			$pro_img = array();
			foreach ($row as $img){
				$targetPath = getcwd() . '/uploads/banner/';
				if(file_exists(getcwd()."/uploads/banner/".$img->bi_job_url)){
					$bin_string = file_get_contents($targetPath.$img->bi_job_url);
					$hex_string = base64_encode($bin_string);
					
					$pro_img[] = array(
						"image_url" =>  urlencode("/uploads/banner/".$img->bi_job_url),
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
	
}