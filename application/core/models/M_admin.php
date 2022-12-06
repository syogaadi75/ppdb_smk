<?php 

class M_admin extends CI_Model{
	function cek_calon($cari){
		return $this->db->get_where('calon',array('no_pendaftaran' => $cari));
	}
	function kategori(){
		return $this->db->get('kategori_biaya');
	}
	function reg_siswa($cari){
		return $this->db->get_where('reg_siswa',array('no_pendaftaran' =>$cari));
	}
	function rekap_jurusan_utama(){
		return $this->db->get('calon');
	}
	function cek_siswa_jurusan($cari){
		return $this->db->query("SELECT reg_siswa.no_du,reg_siswa.nik,reg_siswa.tgl_du,calon.nama,calon.alamat,calon.tmp_lahir,calon.tgl_lahir,calon.asalsekolah FROM reg_siswa INNER JOIN calon ON reg_siswa.nik = calon.nik WHERE reg_siswa.paket_keahlian ='$cari'");
	} 
	function sekolah(){
		return $this->db->query("SELECT DISTINCT asalsekolah FROM calon");
	}
	function cek_siswa_persekolah($cari){
		return $this->db->get_where('calon',array('asalsekolah' => $cari));
	}
	function agama(){
		return $this->db->get('agama');
	}
	function cek_siswa_agama($cari){
		return $this->db->get_where('calon',array('agama' => $cari));
	}
}

 ?>