<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_model extends CI_Model {

	function getTableField($table_name) {
		$fields = $this->db->list_fields($table_name);
		return $fields;
	}
	
	function addTableData($data, $table) {
		$p = array();
		$fields = $this->db->list_fields($table);
		foreach ($fields as $field) {
			if (isset($data[$field])) {
				$p[$field] = urldecode($data[$field]);
			}
		}
		if (count($p) > 0) {
			$this->db->insert($table, $p);
		}
	}
}


									