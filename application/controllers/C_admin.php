<?php

class C_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('petugas')) {
		// 	redirect(base_url());
		// }
		$this->load->model('M_admin');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function beranda()
	{
		$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
		$data['siswa'] = $this->db->query('SELECT  reg_siswa.no_pendaftaran, reg_siswa.no_du, reg_siswa.tgl_du,reg_siswa.paket_keahlian,reg_siswa.uang,reg_siswa.petugas,calon.tgl_daftar,calon.tgl_bayar,calon.nama,calon.gender, calon.tmp_lahir, calon.tgl_daftar,calon.agama, calon.alamat,calon.desa,calon.kecamatan,calon.kota,calon.no_hp_siswa, calon.no_hp_wali,calon.asalsekolah,calon.nm_ayah,calon.nm_ibu,calon.pekerjaan,calon.prioritas1,calon.prioritas2,calon.prioritas3,calon.uang_pendaftaran from calon INNER JOIN reg_siswa ON reg_siswa.no_pendaftaran = calon.no_pendaftaran')->result();
		$data['kategori'] = $this->db->get('kategori_biaya')->result();
		$data['siswa1'] = $this->db->query("SELECT * FROM calon WHERE uang_pendaftaran >= 50000")->result();
		$this->load->view('admin/beranda', $data);
	}
	public function tambah_siswa()
	{
		$data['agama'] = $this->db->get('agama')->result();
		$data['petugas'] = $this->input->get('petugas');
		$this->load->view('admin/tambah_siswa', $data);
	}
	public function pendaftaran()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$cari = $this->input->post('cari');
			$data['calon'] = '';
			if ($cari == null) {
				$data['calon'] = $this->db->get('calon')->result();
			} else {
				$data['calon'] = $this->M_admin->cek_calon($cari)->result();
				$data['re_calon'] = array();
			}
			$data['petugas'] = $this->session->userdata('petugas');
			$data['dataUser'] = $this->db->get_where('user', array('username' => $data['petugas']))->row();
			$data['level'] = $data['dataUser']->status;
			$this->load->view('admin/pendaftaran', $data);
		}
	}
	public function daftar_ulang()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$cari = $this->input->post('cari');
			if ($cari == null) {
				$data['calon'] = $this->db->get('calon')->result();
			} else {
				$data['calon'] = $this->M_admin->cek_calon($cari)->result();
				$data['re_calon'] = array();
			}
			$data['kategori'] = $this->M_admin->kategori()->result();
			$data['reg_siswa'] = $this->db->get('calon', array('no_pendaftaran' => $cari));
			$data['petugas'] = $this->session->userdata('petugas');
			$data['dataUser'] = $this->db->get_where('user', array('username' => $data['petugas']))->row();
			$data['level'] = $data['dataUser']->status;
			$this->load->view('admin/daftar_ulang', $data);
		}
	}
	public function kwitansi_du()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['reg_siswa'] = $this->db->get_where('reg_siswa_v', array('no_du' => $_GET['no_du']))->row_array();
			$this->load->view('admin/kwitansi_du', $data);
		}
	}
	public function kwitansi_pendaftaran()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['calon'] = $this->db->get_where('calon', array('no_pendaftaran' => $_GET['no_pendaftaran']))->row();
			$this->load->view('admin/kwitansi_pendaftaran', $data);
		}
	}
	public function kwitansi_pendaftaran_admin()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$this->load->view('admin/kwitansi_pendaftaran_admin');
		}
	}
	/////////// REKAP DATA /////////////
	public function rekap_pendaftaran_jurusan_utama()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$this->load->view('admin/rekap_pendaftaran_jurusan_utama');
		}
	}
	public function rekap_du_perjurusan()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$cari = $this->input->post('cari');
			$data['siswa'] = $this->M_admin->cek_siswa_jurusan($cari)->result();
			$this->load->view('admin/rekap_du_perjurusan', $data);
		}
	}
	public function rekap_persekolah()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$cari = $this->input->post('cari');
			$data['sekolah'] = $this->M_admin->sekolah()->result();
			$data['siswa'] = $this->M_admin->cek_siswa_persekolah($cari)->result();
			$this->load->view('admin/rekap_persekolah', $data);
		}
	}
	public function rekap_persekolah1()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['sekolah'] = $this->M_admin->sekolah()->result();
			$this->load->view('admin/rekap_persekolah1', $data);
		}
	}
	public function rekap_agama()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$cari = $this->input->post('cari');
			$data['agama'] = $this->M_admin->agama()->result();
			$data['siswa'] = $this->M_admin->cek_siswa_agama($cari)->result();
			$this->load->view('admin/rekap_agama', $data);
		}
	}
	public function laporan_pendaftaran()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$data['siswa'] = $this->db->query("SELECT * FROM calon WHERE uang_pendaftaran >= 50000")->result();
			$this->load->view('admin/laporan_pendaftaran', $data);
		}
	}

	public function cari_laporan_pendaftaran()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$where = array('tgl_bayar >=' => $tgl_awal, 'tgl_bayar <=' => $tgl_akhir, 'uang_pendaftaran >=' => 50000);
			$this->db->where($where);
			$data['siswa'] = $this->db->get('calon')->result();
			$this->load->view('admin/laporan_pendaftaran', $data);
		}
	}

	public function laporan_daftar_ulang()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$data['siswa'] = $this->db->query('SELECT reg_siswa.no_pendaftaran, reg_siswa.no_pendaftaran, reg_siswa.no_du, reg_siswa.tgl_du,reg_siswa.paket_keahlian,reg_siswa.uang,reg_siswa.petugas,calon.tgl_daftar,calon.tgl_bayar,calon.nama,calon.gender, calon.tmp_lahir, calon.tgl_daftar,calon.agama, calon.alamat,calon.desa,calon.kecamatan,calon.kota,calon.no_hp_siswa, calon.no_hp_wali,calon.asalsekolah,calon.nm_ayah,calon.nm_ibu,calon.pekerjaan,calon.prioritas1,calon.prioritas2,calon.prioritas3,calon.uang_pendaftaran from calon INNER JOIN reg_siswa ON reg_siswa.no_pendaftaran = calon.no_pendaftaran')->result();
			$data['kategori'] = $this->db->get('kategori_biaya')->result();
			$this->load->view('admin/laporan_du', $data);
		}
	}

	public function cari_laporan_du()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$data['siswa'] = $this->db->query("SELECT reg_siswa.no_pendaftaran, reg_siswa.no_du, reg_siswa.tgl_du,reg_siswa.paket_keahlian,reg_siswa.uang,reg_siswa.petugas,calon.tgl_daftar,calon.tgl_bayar,calon.nama,calon.gender, calon.tmp_lahir, calon.tgl_daftar,calon.agama, calon.alamat,calon.desa,calon.kecamatan,calon.kota,calon.no_hp_siswa, calon.no_hp_wali,calon.asalsekolah,calon.nm_ayah,calon.nm_ibu,calon.pekerjaan,calon.prioritas1,calon.prioritas2,calon.prioritas3,calon.uang_pendaftaran from calon INNER JOIN reg_siswa ON reg_siswa.no_pendaftaran = calon.no_pendaftaran where reg_siswa.tgl_du >= '$tgl_awal' and reg_siswa.tgl_du <= '$tgl_akhir' ")->result();
			$data['kategori'] = $this->db->get('kategori_biaya')->result();
			$this->load->view('admin/laporan_du', $data);
		}
	}

	public function cari_wa_pendaftaran()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$where = array('tgl_bayar >=' => $tgl_awal, 'tgl_bayar <=' => $tgl_akhir, 'uang_pendaftaran >=' => 50000);
			$this->db->where($where);
			$data['dataTable'] = $this->db->get('calon')->result();
			$this->load->view('admin/wa_pendaftaran', $data);
		}
	}

	public function cari_wa_du()
	{
		if ($this->session->userdata('petugas') == null) {
			redirect(base_url());
		} else {
			$data['tanggal'] = $this->db->query("SELECT DISTINCT tgl_daftar FROM calon")->result();
			$tgl_awal = $this->input->post('tgl_awal');
			$tgl_akhir = $this->input->post('tgl_akhir');
			$data['dataTable'] = $this->db->query("SELECT * FROM reg_siswa_v where reg_siswa_v.tgl_du >= '$tgl_awal' and reg_siswa_v.tgl_du <= '$tgl_akhir' ")->result();
			$this->load->view('admin/wa_daftar_ulang', $data);
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url() . "C_pendaftaran");
	}
}
