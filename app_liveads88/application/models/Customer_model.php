<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_Model extends CI_Model
{
	
	function CheckCustomer($email, $password,$status){		
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('cu_email', $this->db->escape_str($email));
		$this->db->where('cu_password',  hash('sha256',$this->db->escape_str($password)));
		$this->db->where('cu_status', $status);
		
		$query = $this->db->get();
		if ($query->num_rows())
		{
			$results = $query->row_array();
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('cu_email',$results['cu_email']);
			$this->session->set_userdata('cu_id',$results['cu_id']);
			$this->session->set_userdata('user_level','customer');
			unset($results['cu_password']);
			return true;
		}
		return false;
	}
	
	function getCustomer($q){
		$this->db->select('*');
		$this->db->like('cu_name', $q);
		$query = $this->db->get('customer');
		if($query->num_rows() > 0){
		  foreach ($query->result_array() as $row){
			$new_row['id']=(int)$row['cu_id'];
			$new_row['value']=htmlentities(stripslashes($row['cu_name']));
			$new_row['label']=htmlentities(stripslashes($row['cu_name']));
			$row_set[] = $new_row; //build an array
		  }
		  echo json_encode($row_set); //format the array into json data
		}
	}
	
	function getTag($q){
		$this->db->select('*');
		$this->db->like('tg_name', $q);
		$query = $this->db->get('tag');
		if($query->num_rows() > 0){
		  foreach ($query->result_array() as $row){
			$new_row['id']=(int)$row['tg_id'];
			$new_row['value']=htmlentities(stripslashes($row['tg_name']));
			$new_row['label']=htmlentities(stripslashes($row['tg_name']));
			$row_set[] = $new_row; //build an array
		  }
		  echo json_encode($row_set); //format the array into json data
		}
	}
	
	function initTag($id){
		$sql = "SELECT
				tag.tg_name
				FROM
				customer_tag
				INNER JOIN tag ON tag.tg_id = customer_tag.tg_id
				WHERE
				customer_tag.cu_id =".$id;

		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			  foreach ($query->result_array() as $row){
				$new_row[] = $row['tg_name'];
			  }
			  return $new_row;
		}
	}
	
	function deleteCustomerTag($id){
		$this->db->where('cu_id', $id);
		$this->db->delete('customer_tag'); 
		return true;
		
	}
	function addCustomer($data){
		$this->db->set('cu_created', 'NOW()', FALSE);
		$this->db->insert('customer', $data);
		$id = $this->db->insert_id();
		return $id;		
	}
	
	function insertShopImageBatchArray($data){
		$this->db->insert_batch('shop_image', $data); 
	}
	
	function updateCustomer($id,$data){
		//print_r($data);
		$this->db->where('cu_id', $id);
		$this->db->update('customer',$data);
		return true;
	}
	
	function getCustomerDataById($cu_id){
		$this->db->select('*');
		$this->db->where('cu_id', $cu_id);
		$query = $this->db->get('customer');
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	function getShopImages($cu_id){
		$this->db->select('*');
		$this->db->where('cu_id', $cu_id);
		$this->db->order_by('sort_order', 'ASC');
		$query = $this->db->get('shop_image');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}
	
	function getShopImageNameByIDs($customer_id, $sp_id){
		$this->db->select('*');
		$this->db->where('cu_id', $customer_id);
		$this->db->where('sp_id', $sp_id);
		$query = $this->db->get('shop_image');
		if($query->num_rows() > 0){
			$image =  $query->row();
			return $image->sp_name;
		}
		return false;
	}
	
	function deleteShopImageNameByIDs($customer_id, $sp_id){
		$this->db->where('cu_id', $customer_id);
		$this->db->where('sp_id', $sp_id);
		$this->db->delete('shop_image'); 
	}
	
	function deleteLogoImageByID($customer_id){
		$this->db->set('cu_logo_name', '');
		$this->db->where('cu_id', $customer_id);
		$this->db->update('customer'); 
	}
	
	function deleteCustomer($id){
		
		$this->db->select('cu_logo_name,cu_image_name');
		$this->db->where('cu_id', $id);
		$this->db->from('customer');
		$query = $this->db->get();   
	
		if($query->num_rows() > 0){
			$image =  $query->row();
			unlink('uploads/brand/'.$image->cu_logo_name);
			unlink('uploads/customer/'.$image->cu_image_name);
		} 
		
		
		
		$this->db->where('cu_id', $id);
		$this->db->delete('shop_flyer'); 
		
		$this->db->where('cu_id', $id);
		$this->db->delete('shop_image');
		
		$flyer_path = 'upload/flyer/'.$id;
		$shop_path = 'upload/shop_image/'.$id;
		$this->deletedir($shop_path);
		$this->deletedir($flyer_path);
		
		$this->db->where('cu_id', $id);
		$this->db->delete('customer'); 
		$this->db->where('cu_id', $id);
		$this->db->delete('customer_tag');
	}
	
	
	public function deletedir($path) { 
		if(!empty($path) && is_dir($path) ){
        $dir  = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS); //upper dirs are not included,otherwise DISASTER HAPPENS :)
        $files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $f) {if (is_file($f)) {unlink($f);} else {$empty_dirs[] = $f;} } if (!empty($empty_dirs)) {foreach ($empty_dirs as $eachDir) {rmdir($eachDir);}} rmdir($path);
    }

	}
	
	
	function check_customer($id){
		$this->db->select('*');
		$this->db->where('cu_id', $id);
		$query = $this->db->get('customer');
		if($query->num_rows() > 0){
			return true;
		}
		return false;
	}
	
	function check_tag($name){
		$this->db->select('*');
		$this->db->where('tg_name', $name);
		$query = $this->db->get('tag');
		if($query->num_rows() > 0){
			return $query->row();
		}
	}
	
	function addCustomerTag($cu_id,$tags){
		foreach($tags as $tag){
		    $data = $this->check_tag($tag);
			if($data = $this->check_tag($tag)){
				if($data->tg_name == $tag){
				$this->db->set('cu_id', $cu_id);
				$this->db->set('tg_id', $data->tg_id);
				$this->db->insert('customer_tag');
				}
			}else{
				$this->db->set('tg_name', $tag);
				$this->db->insert('tag');
				$tag_id = $this->db->insert_id();
				$this->db->set('cu_id', $cu_id);
				$this->db->set('tg_id', $tag_id);
				$this->db->insert('customer_tag');
			}		
			
		}
	}
	
	
	function getCategory(){
		$this->db->select('*');
		$query = $this->db->get('category');
		if($query->num_rows() > 0){
			return $query->result();
		}
	}
	
	
	
	
	
	function insertShopAlbumImageBatchArray($data){
		$this->db->insert_batch('shop_album', $data); 
	}
	
	function getShopAlbumImagesByCustomerID($id){
		$sql = "SELECT * FROM shop_album WHERE cu_id  =".$id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		return false;
	}
	
	function getShopAlbumImageNameByIDs($cu_id, $sa_id){
		$sql = "SELECT
				sa_name
				FROM
				shop_album
				WHERE sa_id  =".$sa_id ."  
				AND cu_id=". $cu_id;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$image =  $query->row();
			return $image->sa_name;
		}
		return false;
	}
	
	function deleteShopAlbumImageNameByIDs($cu_id, $sa_id){
		$this->db->where('cu_id', $cu_id);
		$this->db->where('sa_id', $sa_id);
		$this->db->delete('shop_album'); 
	}
	
	
	function updateShopImageBatchArray($data){
		$this->db->update_batch('shop_image', $data, 'sp_id');
	}
}