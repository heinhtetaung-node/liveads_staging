<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Jobs extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Job_model');
		$this->load->library(array('session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	private function time_elapsed_string($datetime, $full = false) {
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);

		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;

		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}

		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}
	
	
	function index(){
		
		$keywords="";
		$jobs 			= $this->Job_model->getJobs($keywords);
		
		for($i=0; $i< count($jobs); $i++){
			
			if($this->session->userdata('isLogin') && $this->session->userdata('user_level') == 'user' &&  $this->session->userdata('user_id') > 0 ){
				$user_id = $this->session->userdata('user_id');
				$status =  $this->Job_model->checkLike($user_id, $jobs[$i]->jb_id)? "true" : "false";
			}else{
				$status = null;
			}
			$jobs[$i]->job_like_staus = $status;
			
			if(strlen(strip_tags($jobs[$i]->jb_name)) > 65){
				$jobs[$i]->jb_name  = substr($jobs[$i]->jb_name, 0, 65) . '...';
			}
			
			if(strlen(strip_tags($jobs[$i]->jb_description)) > 200){
				//substr for remove </p>
				$jobs[$i]->jb_description  = substr($this->html_cut($jobs[$i]->jb_description, 200), 0,-4) . '...</p>';
			}
			
			
			if($jobs[$i]->jb_created!=""){
				$jobs[$i]->jb_created = $this->time_elapsed_string($jobs[$i]->jb_created);
			}
		}
		
		
		$data['jobs'] 	= $jobs;
		$data['banner'] 	= $this->Job_model->getBanner();
	
		$this->load->view('header');
		$this->load->view('job/list', $data);
		$this->load->view('footer');
	}
	
	function detail($id){
		
		if(!is_numeric($id) || $id < 0){
			redirect('jobs');
		}
		
		$job = $this->Job_model->getJobDetail($id);
		
		if($job === false){
			redirect('jobs');
		}
		$data['job'] 	= $job;
		$data['banner'] 	= $this->Job_model->getBanner();
	
		$this->load->view('header');
		$this->load->view('job/detail', $data);
		$this->load->view('footer');
	}
	
	
	private function html_cut($text, $max_length)
	{
		$tags   = array();
		$result = "";

		$is_open   = false;
		$grab_open = false;
		$is_close  = false;
		$in_double_quotes = false;
		$in_single_quotes = false;
		$tag = "";

		$i = 0;
		$stripped = 0;

		$stripped_text = strip_tags($text);

		while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length)
		{
			$symbol  = $text{$i};
			$result .= $symbol;

			switch ($symbol)
			{
			   case '<':
					$is_open   = true;
					$grab_open = true;
					break;

			   case '"':
				   if ($in_double_quotes)
					   $in_double_quotes = false;
				   else
					   $in_double_quotes = true;

				break;

				case "'":
				  if ($in_single_quotes)
					  $in_single_quotes = false;
				  else
					  $in_single_quotes = true;

				break;

				case '/':
					if ($is_open && !$in_double_quotes && !$in_single_quotes)
					{
						$is_close  = true;
						$is_open   = false;
						$grab_open = false;
					}

					break;

				case ' ':
					if ($is_open)
						$grab_open = false;
					else
						$stripped++;

					break;

				case '>':
					if ($is_open)
					{
						$is_open   = false;
						$grab_open = false;
						array_push($tags, $tag);
						$tag = "";
					}
					else if ($is_close)
					{
						$is_close = false;
						array_pop($tags);
						$tag = "";
					}

					break;

				default:
					if ($grab_open || $is_close)
						$tag .= $symbol;

					if (!$is_open && !$is_close)
						$stripped++;
			}

			$i++;
		}

		while ($tags)
			$result .= "</".array_pop($tags).">";

		return $result;
	}
	
}