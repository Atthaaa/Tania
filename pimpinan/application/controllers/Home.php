<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $inputan = $this->input->post();

        // Form validation username dan password wajib di isi
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run() == true) {
            $this->load->model('Mpimpinan');
            $output = $this->Mpimpinan->login($inputan);

            if ($output == "ada") {
                $this->session->set_flashdata('pesan_sukses', 'Berhasil login');
                redirect('home', 'refresh');
            } else {
                $this->session->set_flashdata('pesan_gagal', 'Gagal login');
                redirect('/', 'refresh');
            }
        }

        $this->load->model('Mpimpinan');
        $data['jumlah_konten'] = $this->Mpimpinan->jumlah_konten();

        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }
}
