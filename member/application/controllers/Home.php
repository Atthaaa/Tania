<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }

    public function index()
    {
        // $this->load->model('Mmember');
        // $data['jumlah_member_distrik'] = $this->Mmember->jumlah_member_distrik();

        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
}