<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Whatsapp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('petugas')) {
            redirect(base_url());
        }
    }

    public function pendaftaran()
    {
        $data['dataTable'] = $this->db->get_where('calon', array('uang_pendaftaran >=' => 50000))->result();
        $this->load->view('admin/wa_pendaftaran', $data);
    }

    public function daftar_ulang()
    {
        $data['dataTable'] = $this->db->get_where('reg_siswa_v')->result();
        $this->load->view('admin/wa_daftar_ulang', $data);
    }
}

/* End of file C_Whatsapp.php */
