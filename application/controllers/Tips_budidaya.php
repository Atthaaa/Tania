<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tips_budidaya extends CI_Controller
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
    $this->load->model('Mtips_budidaya');
    $data["tips_budidaya"] = $this->Mtips_budidaya->tampil();

    $this->load->view('header');
    $this->load->view('tips_budidaya', $data);
    $this->load->view('footer');
  }
}
