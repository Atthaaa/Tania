<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
  public function index()
  {
    // Menghancurkan tiket bioskop yang dibuat saat login tadi
    $this->session->unset_userdata('id_pengguna');
    $this->session->unset_userdata('Username');
    $this->session->unset_userdata('Nama');
    $this->session->unset_userdata('Password');
    $this->session->unset_userdata('Jenis_kelamin');

    // Set flashdata untuk pesan logout berhasil
    $this->session->set_flashdata('pesan_sukses', 'Anda telah berhasil logout.');

    // Redirect ke halaman utama atau login
    redirect('/', 'refresh');
  }
}