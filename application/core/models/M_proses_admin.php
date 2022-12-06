<?php 

class M_proses_admin extends CI_Model{
	function cek_user($table,$data){
		return $this->db->get_where($table,$data);
	}
	function pendaftaran($table,$dat,$where){
		$this->db->where($where);
		$this->db->update($table,$dat);
	}
}

 ?>