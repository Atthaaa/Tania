<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
  public function index()
  {
    // Menghancurkan tiket bioskop yang dibuat saat login tadi
    $this->session->unset_userdata('id_admin');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('nama_admin');

    // Redirect ke halaman login
    return redirect('/', 'refresh');
  }
}
