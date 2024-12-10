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

   // Fungsi untuk menampilkan detail hama penyakit berdasarkan ID
    public function artikel($id_tips_budidaya)
    {

    $this->load->model('Mtips_budidaya');
    $data['tips_budidaya'] = $this->Mtips_budidaya->artikel_tipsbudidaya($id_tips_budidaya);

    $this->load->view('header');
    $this->load->view('tips_budidaya_artikel', $data);
    $this->load->view('footer');
    }

  public function pencarian()
  { 
    $this->load->model('Mtips_budidaya');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua layanan keuangan
    if (empty($query)) {
        $tips_budidaya = $this->Mtips_budidaya->tampil();
    } else {
        // Cari layanan keuangan berdasarkan judul
        $tips_budidaya = $this->Mtips_budidaya->cari_tips_budidaya($query);
    }

    // Kirim data layanan keuangan ke view
    $data['tips_budidaya'] = $tips_budidaya;
    $this->load->view('header');
    $this->load->view('tips_budidaya', $data);
    $this->load->view('footer');
  }

  function detail($id_tips_budidaya)
    {
        $this->load->model('Mtips_budidaya');
        $data['tips_budidaya'] = $this->Mtips_budidaya->detail_umum($id_tips_budidaya);

        $this->load->view('header');
        $this->load->view('tips_budidaya_artikel', $data);
        $this->load->view('footer');
    }
}
