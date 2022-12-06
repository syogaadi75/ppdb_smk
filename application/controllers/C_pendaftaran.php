<?php
class C_pendaftaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pendaftaran');
	}
	public function index()
	{
		$data['agama'] = $this->db->get('agama')->result();
		$this->load->view('pendaftaran_siswa/pendaftaran', $data);
	}

	public function hal_daftar()
	{
		$data['agama'] = $this->db->get('agama')->result();
		$this->load->view('pendaftaran_siswa/hal_daftar', $data);
	}

	public function daftar()
	{
		$this->load->view('pendaftaran_siswa/daftar_siswa');
	}
	public function login()
	{
		$this->load->view('pendaftaran_siswa/login_siswa');
	}
	public function print_pdf()
	{
		$this->load->view('pendaftaran_siswa/print_pdf');
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}
