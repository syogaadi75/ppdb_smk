<?php
class C_proses_pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_proses_pendaftaran');
	} 

	public function editpdfsiswa_insert(){ 
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_pendaftaran' => $this->db->get('calon')->num_rows()+1, 
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
			'tgl_daftar' => date('Y-m-d'),
			'asalsekolah' => $this->input->post('asekolahp'),
			'nm_ayah' => $this->input->post('ayahp'),
			'nm_ibu' => $this->input->post('ibup'),
			'pekerjaan' => $this->input->post('pap'),
			'prioritas1' => $this->input->post('altp1'),
			'prioritas2' => $this->input->post('altp2'),
			'prioritas3' => $this->input->post('altp3'), 
		); 
		
		$dataCek = array(
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tglp'),
			'nm_ayah' => $this->input->post('ayahp'),
			'nm_ibu' => $this->input->post('ibup'),
		);
		$cekCalon = $this->db->get_where('calon', $dataCek)->num_rows();
		if($cekCalon == 0) {
			$this->M_proses_pendaftaran->insert($data,'calon');

			$where = array(
				'nama' => $this->input->post('nama'),
				'nm_ayah' => $this->input->post('ayahp'),
				'nm_ibu' => $this->input->post('ibup'),
			);
			$this->db->where($where);
			$dCalon = $this->db->get('calon')->result();
			$no_pendaftaran = '';
			$nama = '';
			$asalsekolah = '';
			foreach ($dCalon as $item) {
				$no_pendaftaran = $item->no_pendaftaran;
				$nama = $item->nama;
				$asalsekolah = $item->asalsekolah;
			}

			
			$array = array(
				'no_pendaftaran' => $no_pendaftaran,
				'nama' => $nama,
				'asalsekolah' => $asalsekolah,
			);
			
			$this->session->set_flashdata( $array );
		} else {
			$this->session->set_flashdata('status_daftar', 'gagal');
		}
		
		redirect(base_url());
	}




	// public function daftar_siswa(){
	// 	$nik = $this->input->post('nik');
	// 	$pass = random_string('numeric',4); 
	// 	$data = array('nik' => $nik, 'password' => $pass);
	// 	$cek = $this->M_proses_pendaftaran->daftar_siswa($nik);
	// 	if($cek->num_rows() == 0){
	// 		$this->db->insert('log',$data);
	// 		$this->session->set_flashdata("msg1","<div class='col-sm-12 col-md-offset-0'>
	// 												<h2><b>HARAP INGAT NIK DAN PASSWORD UNTUK LOGIN</b></h2>
	// 											</div>
	// 											<div align='center' class='col-sm-4 col-md-offset-4 alert alert-danger'>
	// 												NIK : ".$nik."
	// 											</div>
	// 											<div align='center' class='col-sm-4 col-md-offset-4 alert alert-danger'>
	// 												PASSWORD : ".$pass."
	// 											</div>");
	// 		redirect(base_url()."C_pendaftaran/daftar");
	// 	}else{
	// 		$this->session->set_flashdata("msg","swal('???','NIK Sudah Terdaftar','error')");
	// 		redirect(base_url()."C_pendaftaran/daftar");
	// 	}
	// }
	// public function login_siswa(){
	// 	$nik = $this->input->post('nik');
	// 	$password = $this->input->post('password');
	// 	$data = array('nik' => $nik,'password' => $password);

	// 	$cek = $this->M_proses_pendaftaran->login_siswa($data);
	// 	if($cek->num_rows() == 0){
	// 		$this->session->set_flashdata("msg","swal('???','Calon Siswa Tidak Terdaftar, harap daftar terlebih dahulu','error')");
	// 		redirect(base_url()."C_pendaftaran/login");
	// 	}else{
	// 		$this->session->set_userdata('nik',$nik);
	// 		redirect(base_url()."C_pendaftaran");
	// 	}
	// } 


	// public function editpdfsiswa(){
	// 	$where = array('nik' => $this->input->post('nik'));
	// 	$data = array(
	// 		'nama' => $this->input->post('nama'),
	// 		'gender' => $this->input->post('kelp'),
	// 		'tmp_lahir' => $this->input->post('tlahirp'),
	// 		'tgl_lahir' => $this->input->post('tglp'),
	// 		'agama' => $this->input->post('agamap'),
	// 		'alamat' => $this->input->post('alamat'),
	// 		'desa' => $this->input->post('desap'),
	// 		'kecamatan' => $this->input->post('kecp'),
	// 		'kota' => $this->input->post('kabp'),
	// 		'telp' => $this->input->post('telpp'),
	// 		'asalsekolah' => $this->input->post('asekolahp'),
	// 		'nm_ayah' => $this->input->post('ayahp'),
	// 		'nm_ibu' => $this->input->post('ibup'),
	// 		'pekerjaan' => $this->input->post('pap'),
	// 		'prioritas1' => $this->input->post('altp1'),
	// 		'prioritas2' => $this->input->post('altp2'),
	// 		'prioritas3' => $this->input->post('altp3'), 
	// 	);
	// 	$cek = $this->db->get_where('reg_siswa',$where);
	// 	if($this->input->post('submit') == 'es'){
	// 		if($cek->num_rows() == 0 ){
	// 			$this->M_proses_pendaftaran->edit($where,$data,'calon');
	// 			$this->session->set_flashdata("msg","swal('!!!','Data Diri Anda Berhasil Disimpan','success')");
	// 		}else{
	// 			$this->session->set_flashdata("msg","swal('!!!','Data Tidak Bisa diubah karena Anda Sudah Daftar Ulang','error')");
	// 		}
	// 		redirect(base_url()."C_pendaftaran");
	// 	}else{
	// 		redirect(base_url()."C_pendaftaran/print_pdf");
	// 	}
	// }
}
?>