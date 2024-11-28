<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$inputan = $this->input->post();

		// Form validation username dan password wajib di isi
		$this->form_validation->set_rules("username", "Username", "required");
		$this->form_validation->set_rules("password", "Password", "required");

		// atur pesan bindo
		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run() == true) {
			$this->load->model('Madmin');
			$output = $this->Madmin->login($inputan);

			if ($output == "ada") {
				$this->session->set_flashdata('pesan_sukses', 'Berhasil login');
				redirect('home', 'refresh');
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Gagal login');
				redirect('/', 'refresh');
			}
		}
		$this->load->view('login');
	}
}