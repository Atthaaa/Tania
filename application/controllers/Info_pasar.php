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

    $data['rekomendasi'] = $this->Minfo_pasar->rekomendasi($id_info_pasar);

    $this->load->view('header');
    $this->load->view('info_pasar_artikel', $data);
    $this->load->view('footer');
    }

  public function pencarian()
  { 
    $this->load->model('Minfo_pasar');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua tips budidaya
    if (empty($query)) {
        $info_pasar = $this->Minfo_pasar->tampil();
    } else {
        // Cari tips budidaya berdasarkan judul
        $info_pasar = $this->Minfo_pasar->cari_info_pasar($query);
    }

    // Cek apakah hasil pencarian kosong
    $data['info_pasar'] = $info_pasar;
    $data['is_empty'] = (empty($info_pasar)); // True jika hasil pencarian kosong
    $data['query'] = $query; // Kata kunci pencarian untuk ditampilkan kembali

    // Kirim data ke view
    $this->load->view('header');
    $this->load->view('info_pasar', $data);
    $this->load->view('footer');
  }

  function detail($id_info_pasar)
    {
        $this->load->model('Minfo_pasar');
        $data['info_pasar'] = $this->Minfo_pasar->detail_umum($id_info_pasar);

        $this->load->view('header');
        $this->load->view('info_pasar_artikel', $data);
        $this->load->view('footer');
    }
}
