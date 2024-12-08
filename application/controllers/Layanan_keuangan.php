<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_keuangan extends CI_Controller
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
    $this->load->model('Mlayanan_keuangan');
    $data["layanan_keuangan"] = $this->Mlayanan_keuangan->tampil();

    $this->load->view('header');
    $this->load->view('layanan_keuangan', $data);
    $this->load->view('footer');
  }

  public function pencarian()
  { 
    $this->load->model('Mlayanan_keuangan');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua layanan keuangan
    if (empty($query)) {
        $layanan_keuangan = $this->Mlayanan_keuangan->tampil();
    } else {
        // Cari layanan keuangan berdasarkan judul
        $layanan_keuangan = $this->Mlayanan_keuangan->cari_layanan_keuangan($query);
    }

    // Kirim data layanan keuangan ke view
    $data['layanan_keuangan'] = $layanan_keuangan;
    $this->load->view('header');
    $this->load->view('layanan_keuangan', $data);
    $this->load->view('footer');
  }

}
