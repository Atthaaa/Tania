<?php
class Hama_penyakit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_pengguna')) {
            redirect('/', 'refresh');
        }
        $this->load->model('Mhama_penyakit');
    }
    public function index()
    {

    //panggil model Mproduk dan fungsi getAllHamaPenyakit()
    $this->load->model('Mhama_penyakit');
    $data['hama_penyakit'] = $this->Mhama_penyakit->tampil();

    $this->load->view('header');
    $this->load->view('hama_penyakit', $data);
    $this->load->view('footer');
    }

     // Fungsi untuk menampilkan detail hama penyakit berdasarkan ID
    function artikel($id_hama_penyakit)
    {

    $this->load->model('Mhama_penyakit');
    $data['hama_penyakit'] = $this->Mhama_penyakit->artikel_hamapenyakit($id_hama_penyakit);

    $data['rekomendasi'] = $this->Mhama_penyakit->rekomendasi($id_hama_penyakit);

    $this->load->view('header');
    $this->load->view('hama_penyakit_artikel', $data);
    $this->load->view('footer');
    }

    public function pencarian()
  { 
    $this->load->model('Mhama_penyakit');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua tips budidaya
    if (empty($query)) {
        $hama_penyakit = $this->Mhama_penyakit->tampil();
    } else {
        // Cari tips budidaya berdasarkan judul
        $hama_penyakit = $this->Mhama_penyakit->cari_hama_penyakit($query);
    }

    // Cek apakah hasil pencarian kosong
    $data['hama_penyakit'] = $hama_penyakit;
    $data['is_empty'] = (empty($hama_penyakit)); // True jika hasil pencarian kosong
    $data['query'] = $query; // Kata kunci pencarian untuk ditampilkan kembali

    // Kirim data ke view
    $this->load->view('header');
    $this->load->view('hama_penyakit', $data);
    $this->load->view('footer');
  }

   function detail($id_hama_penyakit)
    {
        $this->load->model('Mhama_penyakit');
        $data['hama_penyakit'] = $this->Mhama_penyakit->detail_umum($id_hama_penyakit);

        $this->load->view('header');
        $this->load->view('hama_penyakit_artikel', $data);
        $this->load->view('footer');
    }

}