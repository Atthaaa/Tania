<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // function __construct()
    // {
    //     parent::__construct();
    //     // Jika tidk ada tiket suruh login
    //     if (!$this->session->userdata('id_admin')) {
    //         redirect('/', 'refresh');
    //     }
    // }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('home');
    }
}
