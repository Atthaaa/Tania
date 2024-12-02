<?php
class Hama_penyakit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }
    function index()
    {

        //panggil model Mproduk dan fungsi tampil()
        
        $this->load->model('Mhama_penyakit');
        $data['hama_penyakit'] = $this->Mhama_penyakit->tampil();

        $this->load->view('header');
        $this->load->view('hama_penyakit_tampil', $data);
        $this->load->view('footer');
    }
}
