<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pushnotification_Model extends CI_Model
{
	//fetch result, return single object or array of objects
	function fetchResult($sql, $single_object) {
		$query = $this->db->query($sql);
		
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				if ($single_object)
					return $row;
				else 
					$data[] = $row;
			}
		}
		return $data;
	}
	
	
	function addPushNotification($data){
// 		$this->db->set('fdads_created', 'NOW()', FALSE);
		$this->db->insert('push_notifications', $data);
		$id = $this->db->insert_id();
		return $id;		
	}
	
	function updateNotification($id,$data){
		//print_r($data);
		$this->db->where('pn_id', $id);
		$this->db->update('push_notifications',$data);
		return true;
	}
	
	function getNotificationById($id){
		$this->db->select('*');
		$this->db->where('pn_id', $id);
		$query = $this->db->get('push_notifications');
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	function deleteNotification($id){
		$this->db->where('pn_id', $id);
		$this->db->delete('push_notifications');
	}
	
	
}