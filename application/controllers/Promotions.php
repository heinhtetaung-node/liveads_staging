<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Customer Module
  *
  * This module is for Customer function.
  *	@EI EI 
  * @return void
  */
class Promotions extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->library(array('session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	
	function index(){
		
		$keywords="";
		$products 			= $this->Product_model->getPromotionList($keywords);
		
		for($i=0; $i< count($products); $i++){
			
			if(strlen(strip_tags($products[$i]->pro_title)) > 65){
				$products[$i]->pro_title  = substr($products[$i]->pro_title, 0, 65) . '...';
			}
			
			if(strlen(strip_tags($products[$i]->pro_description)) > 200){
				//substr for remove </p>
				$products[$i]->pro_description  = substr($this->html_cut($products[$i]->pro_description, 200), 0,-4) . '...</p>';
			}
		}
		
		
		$data['products'] 	= $products;
		$data['banner'] 	= $this->Product_model->getPromotionBanner();
	
		$this->load->view('header');
		$this->load->view('product/promotionlist', $data);
		$this->load->view('footer');
	}
	
	function detail($id){
		
		if(!is_numeric($id) || $id < 0){
			redirect('products');
		}
		$this->Product_model->apiIncreaseProductViewCount($id);
		$product = $this->Product_model->getProductDetail($id);
		$pro_img = $this->Product_model->getProImage($id);
		
		if($product === false){
			redirect('products');
		}
		$data =  array();
		$data['product'] 	= $product;
		$data['image'] 		= $pro_img;
		$data['banner'] 	= $this->Product_model->getPromotionBanner();
	
		$this->load->view('header');
		$this->load->view('product/detail', $data);
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