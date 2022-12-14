<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CrudController extends CI_Controller
{

    public function get($table)
    {
        $data = $this->db->get($table)->result();
        echo json_encode($data);
    }

    public function getById($table, $id)
    {

        $data = null;
        if ($table == 'calon') {
            $data = $this->db->get_where($table, ['no_pendaftaran' => $id])->row();
        } else {
            $data = $this->db->get_where($table, ['id' => $id])->row();
        }
        echo json_encode($data);
    }

    public function insert($table)
    {
        $data = [];
        if ($table == 'kategori') {

            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
                'harga' => $this->input->post('harga'),
            ];

            $this->db->insert($table, $data);

            $this->session->set_flashdata('pesan', 'Berhasil menambah data');
            redirect(base_url('C_admin/kategori'));
        } else if ($table == 'titipan') {

            $data = [
                'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                'kode_paket' => $this->input->post('kode_paket'),
                'nominal' => $this->input->post('nominal'),
                'created_at' => time(),
            ];

            $this->db->insert($table, $data);

            $this->session->set_flashdata('pesan', 'Berhasil menambah data');
            redirect(base_url('C_admin/titipan'));
        }
    }

    public function update($table, $id)
    {
        $data = [];
        if ($table == 'kategori') {

            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
                'harga' => $this->input->post('harga'),
            ];

            $this->db->where('id', $id);
            $this->db->update($table, $data);

            $this->session->set_flashdata('pesan', 'Berhasil menyimpan perubahan');
            redirect(base_url('C_admin/kategori'));
        } else if ($table == 'titipan') {

            $data = [
                'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                'kode_paket' => $this->input->post('kode_paket'),
                'nominal' => $this->input->post('nominal'),
                'created_at' => time(),
            ];

            $this->db->where('id', $id);
            $this->db->update($table, $data);

            $this->session->set_flashdata('pesan', 'Berhasil menyimpan perubahan');
            redirect(base_url('C_admin/titipan'));
        }
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);

        $this->session->set_flashdata('pesan', 'Berhasil menghapus data');
        if ($table == 'kategori') {
            redirect(base_url('C_admin/kategori'));
        } else if ($table == 'titipan') {
            redirect(base_url('C_admin/titipan'));
        }
    }
}

/* End of file CrudController.php */
