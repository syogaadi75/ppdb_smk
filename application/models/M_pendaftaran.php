<?php 

class M_pendaftaran extends CI_Model{
	function calon($nik){
		return $this->db->get_where('calon',array('nik' => $nik));
	}

	function log($nik){
		return $this->db->get_where('log',array('nik' => $nik));
	}
}

 ?>