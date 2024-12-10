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

   // Fungsi untuk menampilkan detail hama penyakit berdasarkan ID
    public function artikel($id_info_pasar)
    {

    $this->load->model('Minfo_pasar');
    $data['info_pasar'] = $this->Minfo_pasar->artikel_infopasar($id_info_pasar);

    $this->load->view('header');
    $this->load->view('info_pasar_artikel', $data);
    $this->load->view('footer');
    }

  public function pencarian()
  { 
    $this->load->model('Minfo_pasar');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua layanan keuangan
    if (empty($query)) {
        $info_pasar = $this->Minfo_pasar->tampil();
    } else {
        // Cari layanan keuangan berdasarkan judul
        $info_pasar = $this->Minfo_pasar->cari_info_pasar($query);
    }

    // Kirim data layanan keuangan ke view
    $data['info_pasar'] = $info_pasar;
    $this->load->view('header');
    $this->load->view('info_pasar', $data);
    $this->load->view('footer');
  }
}
