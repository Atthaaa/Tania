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

   // Fungsi untuk menampilkan detail hama penyakit berdasarkan ID
    public function artikel($id_layanan_keuangan)
    {

    $this->load->model('Mlayanan_keuangan');
    $data['layanan_keuangan'] = $this->Mlayanan_keuangan->artikel_layanankeuangan($id_layanan_keuangan);

    $data['rekomendasi'] = $this->Mlayanan_keuangan->rekomendasi($id_layanan_keuangan);


    $this->load->view('header');
    $this->load->view('layanan_keuangan_artikel', $data);
    $this->load->view('footer');
    }

  public function pencarian()
  { 
    $this->load->model('Mlayanan_keuangan');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua tips budidaya
    if (empty($query)) {
        $layanan_keuangan = $this->Mlayanan_keuangan->tampil();
    } else {
        // Cari tips budidaya berdasarkan judul
        $layanan_keuangan = $this->Mlayanan_keuangan->cari_layanan_keuangan($query);
    }

    // Cek apakah hasil pencarian kosong
    $data['layanan_keuangan'] = $layanan_keuangan;
    $data['is_empty'] = (empty($layanan_keuangan)); // True jika hasil pencarian kosong
    $data['query'] = $query; // Kata kunci pencarian untuk ditampilkan kembali

    // Kirim data ke view
    $this->load->view('header');
    $this->load->view('layanan_keuangan', $data);
    $this->load->view('footer');
  }

  function detail($id_layanan_keuangan)
    {
        $this->load->model('Mlayanan_keuangan');
        $data['layanan_keuangan'] = $this->Mlayanan_keuangan->detail_umum($id_layanan_keuangan);

        $this->load->view('header');
        $this->load->view('layanan_keuangan_artikel', $data);
        $this->load->view('footer');
    }

}
