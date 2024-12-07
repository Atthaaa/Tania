<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_pasar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // Jika tidk ada tiket suruh login
    if (!$this->session->userdata('id_pengguna')) {
      redirect('/', 'refresh');
    }
  }

  public function index()
  {
    $this->load->model('Minfo_pasar');
    $data["info_pasar"] = $this->Minfo_pasar->tampil();

    $this->load->view('header');
    $this->load->view('info_pasar', $data);
    $this->load->view('footer');
  }
}
