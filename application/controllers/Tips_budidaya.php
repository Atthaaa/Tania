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

    $data['rekomendasi'] = $this->Mtips_budidaya->rekomendasi($id_tips_budidaya);

    $this->load->view('header');
    $this->load->view('tips_budidaya_artikel', $data);
    $this->load->view('footer');
    }

  public function pencarian()
{ 
    $this->load->model('Mtips_budidaya');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua tips budidaya
    if (empty($query)) {
        $tips_budidaya = $this->Mtips_budidaya->tampil();
    } else {
        // Cari tips budidaya berdasarkan judul
        $tips_budidaya = $this->Mtips_budidaya->cari_tips_budidaya($query);
    }

    // Cek apakah hasil pencarian kosong
    $data['tips_budidaya'] = $tips_budidaya;
    $data['is_empty'] = (empty($tips_budidaya)); // True jika hasil pencarian kosong
    $data['query'] = $query; // Kata kunci pencarian untuk ditampilkan kembali

    // Kirim data ke view
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
