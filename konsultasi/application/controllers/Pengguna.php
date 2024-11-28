<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
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
