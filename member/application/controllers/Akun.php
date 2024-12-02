<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // Jika tidak ada tiket suruh login
    if (!$this->session->userdata('id_pengguna')) {
      redirect('/', 'refresh');
    }
  }

  public function index()
  {
    $this->load->model('Mongkir');
    $data['distrik'] = $this->Mongkir->tampil_distrik();

    $inputan = $this->input->post();

    // Form validation username dan password wajib di isi
    $this->form_validation->set_rules("Nama", "Nama Lengkap", "required");
    $this->form_validation->set_rules("No_HP", "No Telepon", "required");
    $this->form_validation->set_rules("Jenis_kelamin", "Jenis Kelamin", "required");
  
    // atur pesan bindo
    $this->form_validation->set_message("required", "%s wajib diisi");

    if ($this->form_validation->run() == true) {
      $this->load->model('Mpengguna');
      $id_pengguna = $this->session->userdata('id_pengguna');

      $this->Mpengguna->ubah($inputan, $id_pengguna);

      $this->session->set_flashdata('pesan_sukses', 'Akun telah dirubah cakkk');

      redirect('home', 'refresh');
    }
    $this->load->view('header');
    $this->load->view('akun', $data);
    $this->load->view('footer');
  }
}