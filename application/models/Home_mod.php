<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_mod extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function contact_new_process_db($data){
		$this->db->insert('tbl_contact', $data);
	}

	public function contact_edit_process_db($data, $where){
		$this->db->where($where);
		$this->db->update('tbl_contact',$data);
	}

	function contact_list($id = null, $where = null){
		if(isset($where)){
			$this->db->where($where);
		}
		elseif(isset($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('tbl_contact');
		return $query->result_array();
	}

	public function free_quotation_new_process_db($data){
		$this->db->insert('tbl_quote', $data);
	}

	public function free_quotation_edit_process_db($data, $where){
		$this->db->where($where);
		$this->db->update('tbl_quote',$data);
	}

	function free_quotation_list($id = null, $where = null){
		if(isset($where)){
			$this->db->where($where);
		}
		elseif(isset($id)){
			$this->db->where('id', $id);
		}
		$query = $this->db->get('tbl_quote');
		return $query->result_array();
	}
}
/*
	End Model Auth_mod
*/