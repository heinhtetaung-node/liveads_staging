<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flashdealads_Model extends CI_Model
{
	
	function addFlashDealAds($data){
		$this->db->set('fdads_created', 'NOW()', FALSE);
		$this->db->insert('flash_deal_ads', $data);
		$id = $this->db->insert_id();
		return $id;		
	}
	
	function updateFlashDealAds($id,$data){
		//print_r($data);
		$this->db->where('fdads_id', $id);
		$this->db->update('flash_deal_ads',$data);
		return true;
	}
	
	function getFlashDealAdsDataById($id){
		$this->db->select('*');
		$this->db->where('fdads_id', $id);
		$query = $this->db->get('flash_deal_ads');
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	function deleteFlashDealAds($id){
		$this->db->where('fdads_id', $id);
		$this->db->delete('flash_deal_ads');
	}
	
	function getActiveFlashDealAds(){
		$this->db->select('*');
		$this->db->where('fdads_status', '1');
		$query = $this->db->get('flash_deal_ads');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}
	
	function validate_add_cart_item(){
     
		$fdads_id = $this->input->post('id'); 
		
		$this->db->select('*');
		$this->db->where('fdads_id', $fdads_id);
		$query = $this->db->get('flash_deal_ads');
		if($query->num_rows() > 0){
		 
		// We have a match!
			$row = $query->row();
			
				
				$data = array(
					'id'       => $fdads_id,
					'qty'      => 1,
					'price'    => $row->fdads_price,
					'name'     => $row->fdads_name,
					'duration' => $row->fdads_duration,
				);
	 
				// Add the data to the cart using the insert function that is available because we loaded the cart library
				$this->cart->insert($data); 
				 
				return TRUE; // Finally return TRUE
			
		 
		}else{
			// Nothing found! Return FALSE! 
			return FALSE;
		}
	}
	
	function validate_update_cart_item(){
		 
		// Get the total number of items in cart
		$total = count($this->cart->contents());
		 
		// Retrieve the posted information
		$item = $this->input->post('rowid');
		$qty = $this->input->post('qty');
	 
		// Cycle true all items and update them
		for($i=0;$i < $total;$i++)
		{
			// Create an array with the products rowid's and quantities. 
			$data = array(
			   'rowid' => $item[$i],
			   'qty'   => $qty[$i]
			);
			 
			// Update the cart with the new information
			$this->cart->update($data);
		}
	 
	}
	
	function getCustomerInfo(){
		
		$this->db->select('cu_name, cu_address, cu_mobile, cu_email, cu_postal');
		$this->db->where('cu_id', $this->session->userdata('cu_id'));
		$query = $this->db->get('customer');
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
		
	}
	
	function saveFlashDealAdsOrder($data){
		
		$this->db->set('fdo_customer_id', $this->session->userdata('cu_id') );
		$this->db->set('fdo_status', '0');
		$this->db->set('payment_status', '1');
		$this->db->set('fdo_created', 'NOW()', FALSE);
		$this->db->insert('flash_deal_ads_order', $data);
		$id = $this->db->insert_id();
		return $id;	
	}
	
	function saveFlashDealAdsOrderitems($id){
		$data_to_store = array();
		foreach($this->cart->contents() as $items)
		{
			for($i=0; $i < $items['qty']; $i++){
				$data_to_store[] =  array(	'fdo_id' 		=> $id, 
										'fdoi_name' 	=>$items['name'], 
										'fdoi_duration'	=>$items['duration'], 
										'fdoi_quantity'	=>1, 
										'fdoi_price'	=>$items['price'], 
										'fdoi_subtotal'	=>$items['subtotal']
									);
			}
		}
		$this->db->insert_batch('flash_deal_ads_order_item', $data_to_store);
	}
	
	function getFlashDealAdsProductDataById($id){
		$this->db->select('*');
		$this->db->where('fdoi_id', $id);
		$query = $this->db->get('flash_deal_ads_order_item');
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	function updateFlashDealAdsOrderitems($id, $data){
		$this->db->where('fdoi_id', $id);
		$this->db->update('flash_deal_ads_order_item',$data);
		return true;
	}
	
	function updateflashDealOrderToken($id, $data) {
		$this->db->where('fdo_id', $id);
		$this->db->update('flash_deal_ads_order', $data);
	}
	
	
}