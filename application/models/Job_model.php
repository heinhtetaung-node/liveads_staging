<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_Model extends CI_Model
{
	function getJobs($keywords){

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
	
	function getJobDetail($jb_id){
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
	
	function checkLike($user_id,$item_id){
		
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
		
	function getBanner(){
		$sql = "SELECT
				banner_image.bi_job_url , banner.banner_link, banner.customer_id 
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
				
				if(file_exists(getcwd()."/app_liveads88/uploads/banner/".$img->bi_job_url)){
					
					$pro_img[] = array(
						"image" =>  $img->bi_job_url,
						"link" => $img->banner_link,
						"shop_id" => $img->customer_id,		
						);
				}
				
			}
			return $pro_img;
		}
	}
	
}