<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
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
    $inputan = $this->input->post();

    // Form validation username dan password wajib di isi
    $this->form_validation->set_rules("username", "Password", "required");
    $this->form_validation->set_rules("nama_admin", "Nama Lengkap", "required");

    // atur pesan bindo
    $this->form_validation->set_message("required", "%s wajib diisi");

    if ($this->form_validation->run() == true) {
      $this->load->model('Madmin');
      $id_admin = $this->session->userdata('id_admin');

      $this->Madmin->ubah($inputan, $id_admin);

      $this->session->set_flashdata('pesan_sukses', 'Akun telah dirubah');

      redirect('home', 'refresh');
    }
    $this->load->view('header');
    $this->load->view('akun');
    $this->load->view('footer');
  }
}
