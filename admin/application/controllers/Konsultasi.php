<?php
class Konsultasi extends CI_Controller
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


        $this->load->view("header");
        $this->load->view("konsultasi");
        $this->load->view('footer');
    }
}