<?php

class C_proses_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_proses_admin");
	}
	public function login()
	{
		$data = array('username' => $this->input->post('username'), 'password' => sha1($this->input->post('password')));
		$cek = $this->M_proses_admin->cek_user('user', $data);
		if ($cek->num_rows() == 0) {
			$this->session->set_flashdata("msg", "<div class='alert alert-danger' id='alert'>Login Gagal !!!</div>");
			redirect(base_url() . "C_admin/login");
		} else {
			$this->session->set_userdata('petugas', $this->input->post('username'));
			redirect(base_url() . "C_admin/beranda");
		}
	}
	public function tambah_siswa()
	{
		$data = array(
			'no_pendaftaran' => $this->db->get('calon')->num_rows() + 1,
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('kelp'),
			'tmp_lahir' => $this->input->post('tlahirp'),
			'tgl_lahir' => $this->input->post('tglp'),
			'agama' => $this->input->post('agamap'),
			'alamat' => $this->input->post('alamat'),
			'desa' => $this->input->post('desap'),
			'kecamatan' => $this->input->post('kecp'),
			'kota' => $this->input->post('kabp'),
			'no_hp_siswa' => $this->input->post('no_hp_siswa'),
			'no_hp_wali' => $this->input->post('no_hp_wali'),
			'asalsekolah' => $this->input->post('asekolahp'),
			'nm_ayah' => $this->input->post('ayahp'),
			'nm_ibu' => $this->input->post('ibup'),
			'pekerjaan' => $this->input->post('pap'),
			'prioritas1' => $this->input->post('altp1'),
			'prioritas2' => $this->input->post('altp2'),
			'prioritas3' => $this->input->post('altp3'),
		);

		$this->db->insert('calon', $data);
		$this->session->set_flashdata("msg", "swal('!!!','Data siswa Berhasil Disimpan','success')");
		redirect(base_url() . "C_admin/pendaftaran");
	}

	public function tambah_siswa_admin()
	{
		$no_pendaftaran = $this->db->get('calon')->num_rows() + 1;
		$data = array(
			'no_pendaftaran' => $no_pendaftaran,
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('kelp'),
			'tmp_lahir' => $this->input->post('tlahirp'),
			'tgl_lahir' => $this->input->post('tglp'),
			'agama' => $this->input->post('agamap'),
			'alamat' => $this->input->post('alamat'),
			'desa' => $this->input->post('desap'),
			'kecamatan' => $this->input->post('kecp'),
			'kota' => $this->input->post('kabp'),
			'no_hp_siswa' => $this->input->post('no_hp_siswa'),
			'no_hp_wali' => $this->input->post('no_hp_wali'),
			'asalsekolah' => $this->input->post('asekolahp'),
			'nm_ayah' => $this->input->post('ayahp'),
			'nm_ibu' => $this->input->post('ibup'),
			'pekerjaan' => $this->input->post('pap'),
			'prioritas1' => $this->input->post('altp1'),
			'prioritas2' => $this->input->post('altp2'),
			'prioritas3' => $this->input->post('altp3'),
			'tgl_bayar' => date('Y-m-d'),
			'tgl_daftar' => date('Y-m-d'),
			'uang_pendaftaran' => $this->input->post('uang_daftar'),
			'petugas' => $this->input->post('petugas')
		);

		$this->db->insert('calon', $data);

		$where = array('nama' => $this->input->post('nama'), 'nm_ibu' => $this->input->post('ibup'));
		$this->db->where($where);
		$data['data_print'] = $this->db->get('calon')->result();
		$data['uang_bayar'] = $this->input->post('uang_daftar');
		$this->load->view('admin/kwitansi_pendaftaran_admin', $data);
	}

	public function edit_siswa_admin($no_pendaftaran)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('kelp'),
			'tmp_lahir' => $this->input->post('tlahirp'),
			'tgl_lahir' => $this->input->post('tglp'),
			'agama' => $this->input->post('agamap'),
			'alamat' => $this->input->post('alamat'),
			'desa' => $this->input->post('desap'),
			'kecamatan' => $this->input->post('kecp'),
			'kota' => $this->input->post('kabp'),
			'no_hp_siswa' => $this->input->post('no_hp_siswa'),
			'no_hp_wali' => $this->input->post('no_hp_wali'),
			'asalsekolah' => $this->input->post('asekolahp'),
			'nm_ayah' => $this->input->post('ayahp'),
			'nm_ibu' => $this->input->post('ibup'),
			'pekerjaan' => $this->input->post('pap'),
			'prioritas1' => $this->input->post('altp1'),
			'prioritas2' => $this->input->post('altp2'),
			'prioritas3' => $this->input->post('altp3'),
			'tgl_bayar' => date('Y-m-d'),
			'tgl_daftar' => date('Y-m-d'),
		);

		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->update('calon', $data);

		$where = array('nama' => $this->input->post('nama'), 'nm_ibu' => $this->input->post('ibup'));
		$this->db->where($where);
		$data['data_print'] = $this->db->get('calon')->result();
		$this->load->view('admin/kwitansi_pendaftaran_admin', $data);
	}

	public function edit_pendaftar($no_pendaftaran)
	{
		$data['agama'] = $this->db->get('agama')->result();
		$data['edit'] = $this->db->get_where('calon', array('no_pendaftaran' => $no_pendaftaran))->result();
		$this->load->view('admin/edit_siswa', $data);
	}

	public function hapus_pendaftar($no_pendaftaran)
	{
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		if ($this->db->delete('calon')) {
			$this->session->set_flashdata('succ_hapus', 'true');
			redirect(base_url('C_admin/pendaftaran'));
		} else {
			echo 'Error hapus';
		}
	}

	public function pendaftaran()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$asalsekolah = $this->input->post('asalsekolah');
		$biaya = $this->input->post('biaya');
		$nominal = $this->input->post('nominal');
		$kembalian = $this->input->post('kembalian');
		$p1 = $this->input->post('p1');
		$p2 = $this->input->post('p2');
		$p3 = $this->input->post('p3');
		$p4 = $this->input->post('p4');
		$p5 = $this->input->post('p5');
		$petugas = $this->session->userdata('petugas');
		if ($nominal >= $biaya) {
			$uangg = $biaya;
		} else {
			$uangg = $nominal;
		}
		$where = array('no_pendaftaran' => $no_pendaftaran);
		$dat = array('tgl_bayar' => date('Y-m-d'), 'uang_pendaftaran' => $uangg, 'petugas' => $petugas);
		$this->M_proses_admin->pendaftaran('calon', $dat, $where);
		redirect(base_url() . "C_admin/kwitansi_pendaftaran?no_pendaftaran=$no_pendaftaran&nama=$nama&tgl_lahir=$tgl_lahir&alamat=$alamat&asalsekolah=$asalsekolah&biaya=$biaya&nominal=$nominal&kembalian=$kembalian&p1=$p1&p2=$p2&p3=$p3&p4=$p4&p5=$p5&petugas=$petugas");
	}
	public function pendaftaran_bank()
	{
		$no_pendaftaran = $_GET['no_pendaftaran'];
		$nama = $_GET['nama'];
		$tgl_lahir = $_GET['tgl_lahir'];
		$alamat = $_GET['alamat'];
		$asalsekolah = $_GET['asalsekolah'];
		$biaya = $_GET['biaya'];
		$nominal = $_GET['nominal'];
		$kembalian = $_GET['kembalian'];
		$p1 = $_GET['p1'];
		$p2 = $_GET['p2'];
		$p3 = $_GET['p3'];
		$p4 = $_GET['p4'];
		$p5 = $_GET['p5'];
		$petugas = $this->session->userdata('petugas');
		$where = array('no_pendaftaran' => $_GET['no_pendaftaran']);
		$dat = array('tgl_bayar' => date('Y-m-d'), 'uang_pendaftaran' => $nominal, 'petugas' => $petugas);
		$this->M_proses_admin->pendaftaran('calon', $dat, $where);
		redirect(base_url() . "C_admin/kwitansi_pendaftaran?no_pendaftaran=$no_pendaftaran&nama=$nama&tgl_lahir=$tgl_lahir&asalsekolah=$asalsekolah&biaya=$biaya&nominal=$nominal&kembalian=$kembalian&p1=$p1&p2=$p2&p3=$p3&p4=$p4&p5=$p5&petugas=$petugas");
	}

	public function daftar_ulang()
	{
		$no_du = $this->input->post('no_du');
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$asalsekolah = $this->input->post('asalsekolah');
		$prioritas = $this->input->post('prioritas');
		$biaya = $this->input->post('biaya');
		$nominal = $this->input->post('nominal');
		$kembalian = $this->input->post('kembalian');
		$petugas = $this->session->userdata('petugas');
		$uangg = 0;
		if ($nominal >= $biaya) {
			$uangg = $biaya;
		} else {
			$uangg = $nominal;
		}
		if ($this->input->post('pembayaran') == '1') {
			$dat = array('no_pendaftaran' => $no_pendaftaran, 'no_du' => $this->input->post('no_du'), 'tgl_du' => date('Y-m-d'), 'paket_keahlian' => $this->input->post('prioritas'), 'nominal' => $nominal, 'kembalian' => $kembalian, 'uang' => $uangg, 'petugas' => $petugas);
			$this->db->insert('reg_siswa', $dat);
			$where = $this->db->where('no_pendaftaran', $no_pendaftaran);
			$this->db->update('calon', array('tgl_du' => date('Y-m-d')));
			redirect(base_url() . "C_admin/kwitansi_du?no_du=$no_du");
		} else {
			$dat = array('no_pendaftaran' => $no_pendaftaran, 'no_du' => $this->input->post('no_du'), 'tgl_du' => date('Y-m-d'), 'paket_keahlian' => $this->input->post('prioritas'), 'nominal' => $nominal, 'kembalian' => $kembalian, 'uang' => $biaya, 'petugas' => $petugas);
			$this->db->insert('reg_siswa', $dat);
			$where = $this->db->where('no_pendaftaran', $no_pendaftaran);
			$this->db->update('calon', array('tgl_du' => date('Y-m-d')));
			redirect(base_url() . "C_admin/kwitansi_du?no_du=$no_du");
		}
	}

	public function batal_pendaftaran()
	{
		$no_pendaftaran = $this->input->get('no_pendaftaran');

		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->update('calon', array(
			'tgl_bayar' => '',
			'uang_pendaftaran' => '',
			'petugas' => '',
		));

		$this->session->set_flashdata('status_batal', 'berhasil');

		redirect(base_url('C_admin/pendaftaran'), 'refresh');
	}

	public function batal_du()
	{
		$no_pendaftaran = $this->input->get('no_pendaftaran');

		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->update('calon', array(
			'tgl_du' => '',
		));

		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->delete('reg_siswa');

		$this->session->set_flashdata('status_batal', 'berhasil');

		redirect(base_url('C_admin/daftar_ulang'), 'refresh');
	}
}
