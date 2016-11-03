<?php defined('BASEPATH') OR exist('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
/**
 * This is Products promotion /flash deal 
 * @author  EI
 *
 */
class Image extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->lang->load('api', 'english');
		$this->load->library('encrypt');
    }
	
	function getImage(){
		
		if(trim($this->security->xss_clean($this->input->get('id'))) != ""){
			$imageurl = trim($this->security->xss_clean($this->input->get('id')));
			
			$image_url_string = urldecode($imageurl);
			
			$filename = getcwd().$image_url_string; //<-- specify the image  file
			if(file_exists($filename)){ 
			  header('Content-Length: '.filesize($filename)); //<-- sends filesize header
			  header('Content-Type: image/jpg'); //<-- send mime-type header
			  header('Content-Disposition: inline; filename="'.$filename.'";'); //<-- sends filename header
			  readfile($filename); //<--reads and outputs the file onto the output buffer
			  die(); //<--cleanup
			  exit; //and exit
			}
			
			
		}else{
			exit;
		}
			
		
	}
	
}