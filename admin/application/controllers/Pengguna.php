<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }
    public function index()
    {

        //memanggil model member dan fungsi tampil

        $this->load->model('Mpengguna');
        $data['pengguna'] = $this->Mpengguna->tampil();

        $this->load->view('header');
        $this->load->view('pengguna_tampil', $data);
        $this->load->view('footer');
    }
}

