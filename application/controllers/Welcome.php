<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$inputan = $this->input->post();

		// Form validation username dan password wajib di isi
		$this->form_validation->set_rules("Username", "username", "required");
		$this->form_validation->set_rules("Password", "password", "required");

		// atur pesan bindo
		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run() == true) {
			$this->load->model('Mpengguna');
			$output = $this->Mpengguna->login($inputan);

			if ($output == "ada") {
				$this->session->set_flashdata('pesan_sukses', 'Berhasil login');
				redirect('welcome', 'refresh');
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Gagal login');
				redirect('/', 'refresh');
			}
		}

		$this->load->model('Mhama_penyakit');
		$data['hama_penyakit'] = $this->Mhama_penyakit->tampil_hamapenyakit_terbaru();

		$this->load->model('Mtips_budidaya');
		$data['tips_budidaya'] = $this->Mtips_budidaya->tampil_tipsbudidaya_terbaru();

		$this->load->model('Mlayanan_keuangan');
		$data['layanan_keuangan'] = $this->Mlayanan_keuangan->tampil_layanankeuangan_terbaru();

		$this->load->model('Minfo_pasar');
		$data['info_pasar'] = $this->Minfo_pasar->tampil_infopasar_terbaru();

		$this->load->view('header');
		$this->load->view('welcome', $data);
		$this->load->view('footer');
	}
}

