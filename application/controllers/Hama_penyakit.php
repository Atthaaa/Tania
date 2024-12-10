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
    }
    function index()
    {

        //panggil model Mproduk dan fungsi tampil()
        
        $this->load->model('Mhama_penyakit');
        $data['hama_penyakit'] = $this->Mhama_penyakit->tampil();

        $this->load->view('header');
        $this->load->view('hama_penyakit', $data);
        $this->load->view('footer');
    }

     // Fungsi untuk menampilkan detail hama penyakit berdasarkan ID
    public function artikel($id_hama_penyakit)
    {

    $this->load->model('Mhama_penyakit');
    $data['hama_penyakit'] = $this->Mhama_penyakit->artikel_hamapenyakit($id_hama_penyakit);

    $this->load->view('header');
    $this->load->view('hama_penyakit_artikel', $data);
    $this->load->view('footer');
    }


    public function pencarian()
  { 
    $this->load->model('Mhama_penyakit');
    // Ambil query pencarian dari input
    $query = $this->input->get('query');

    // Jika query kosong, tampilkan semua layanan keuangan
    if (empty($query)) {
        $hama_penyakit = $this->Mhama_penyakit->tampil();
    } else {
        // Cari layanan keuangan berdasarkan judul
        $hama_penyakit = $this->Mhama_penyakit->cari_hama_penyakit($query);
    }

    // Kirim data layanan keuangan ke view
    $data['hama_penyakit'] = $hama_penyakit;
    $this->load->view('header');
    $this->load->view('hama_penyakit', $data);
    $this->load->view('footer');
  }

}
