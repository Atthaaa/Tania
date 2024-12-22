<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }
    public function index()
    {

        //memanggil model member dan fungsi tampil

        $this->load->model('Mpengguna');
        $data['pengguna'] = $this->Mpengguna->tampil();

        $this->load->view('header');
        $this->load->view('pengguna_tampil', $data);
        $this->load->view('footer');
    }
    function hapus($id_pengguna)
    {

        //panggilMartikel
        $this->load->model('Mpengguna');

        //jalankan fungsi hapus
        $this->Mpengguna->hapus($id_pengguna);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'layanan keuangan telah terhapus');

        //redirect ke pengguna utk tampil data
        redirect('pengguna', 'refresh');
    }

    function edit($id_pengguna)
    {
        // 1. Tampilkan pengguna lama
        $this->load->model('Mpengguna');
        $data['pengguna'] = $this->Mpengguna->detail($id_pengguna);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("Nama", "Nama Pengguna", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mpengguna->edit($inputan, $id_pengguna);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'layanan keuangan telah diubah');
            // Redirect
            redirect('pengguna', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('pengguna_edit', $data);
        $this->load->view('footer');
    }
}

