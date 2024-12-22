<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {   
        $this->load->model('Mpengguna');
        $data['jumlah_konten'] = $this->Mpengguna->jumlah_konten();

        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }
}
