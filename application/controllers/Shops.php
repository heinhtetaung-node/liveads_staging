<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Shops extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Shop_model');
		$this->load->library(array('session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	
	function index(){
		
		$keywords="";
		$category_id = "";
		$shops 			= $this->Shop_model->getShop($keywords,$category_id);
		
		for($i=0; $i< count($shops); $i++){
			
			if(strlen(strip_tags($shops[$i]->cu_name)) > 65){
				$shops[$i]->cu_name  = substr($shops[$i]->cu_name, 0, 65) . '...';
			}
			
		}
		
		$data['shops'] 	= $shops;
	
		$this->load->view('header');
		$this->load->view('shop/list', $data);
		$this->load->view('footer');
	}
	
	function detail($id){
		
		if(!is_numeric($id) || $id < 0){
			redirect('shops');
		}
		
		$shop = $this->Shop_model->getShopDetail($id);
		$flyer = $this->Shop_model->getShopFlyer($id);
		$shop_album = $this->Shop_model->getShopAlbum($id);
		$banner = $this->Shop_model->getBanner($id);
		
		if($shop === false){
			redirect('shops');
		}
		
		$data =  array();
		$data['shop'] 		= $shop;
		$data['flyer'] 		= $flyer;
		$data['shop_album'] = $shop_album;
		$data['banner'] 	= $banner;
	
		$this->load->view('header');
		$this->load->view('shop/detail', $data);
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