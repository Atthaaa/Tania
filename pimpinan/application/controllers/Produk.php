<?php
class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }
    function index()
    {

        //panggil model Mproduk dan fungsi tampil()

        $this->load->model('Mproduk');
        $data['produk'] = $this->Mproduk->tampil();

        $this->load->view('header');
        $this->load->view('produk_tampil', $data);
        $this->load->view('footer');
    }
}