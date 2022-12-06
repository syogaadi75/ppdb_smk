<?php 

class M_proses_pendaftaran extends CI_Model{
	function cek_nik($nik){
		return $this->db->get_where('calon',array('nik'=>$nik));
	}
	function cek_siswa($data){
		return $this->db->get_where('calon',$data);
	}
	function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function insert($data,$table){ 
		$this->db->insert($table,$data);
	}

	function login_siswa($data){
		return $this->db->get_where('log',$data);
	}

	function daftar_siswa($nik)
	{
		return $this->db->get_where('log',array('nik'=>$nik));
	}
}

 ?>