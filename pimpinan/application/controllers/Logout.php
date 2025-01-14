<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
  public function index()
  {
    // Menghancurkan tiket bioskop yang dibuat saat login tadi
    $this->session->unset_userdata('id_pimpinan');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('password');
    // Set flashdata untuk pesan logout berhasil
    $this->session->set_flashdata('pesan_sukses', 'Anda telah berhasil logout.');

    // Redirect ke halaman utama atau login
    redirect('home', 'refresh');
  }
}