<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
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

        // id member yang sedang login
        $id_member = $this->session->userdata('id_member');

        // menampilkan transaksi penjualan si member
        $this->load->model('Mtransaksi');
        $data['jual'] = $this->Mtransaksi->transaksi_member_jual($id_member);

        $this->load->view('header');
        $this->load->view('seller/transaksi_tampil', $data);
        $this->load->view('footer');
    }

    function detail($id_transaksi)
    {
        // Panggil model Mtransaksi
        $this->load->model("Mtransaksi");

        // Panggil fungsi detail()
        $data['transaksi'] = $this->Mtransaksi->detail($id_transaksi);

        if ($data['transaksi']['id_member_jual'] !== $this->session->userdata('id_member')) {
            $this->session->set_flashdata('pesan_gagal', 'tidak valid');
            redirect('seller/transaksi', 'refresh');
        }

        // Panggil fungsi transaksi_detail()
        $data['transaksi_detail'] = $this->Mtransaksi->transaksi_detail($id_transaksi);

        $this->form_validation->set_rules('resi_ekspedisi', 'resi', 'required');
        $this->form_validation->set_message('required', '%s wajib diisi');

        if ($this->form_validation->run() == true) {
            $resi = $this->input->post('resi_ekspedisi');
            $this->Mtransaksi->update_resi($resi, $id_transaksi);
            $this->session->set_flashdata('pesan_sukses', 'nomor resi telah terkirim');
            redirect('seller/transaksi/detail/' . $id_transaksi, 'refresh');
        }

        $this->load->view('header');
        $this->load->view('seller/transaksi_detail', $data);
        $this->load->view('footer');
    }
}
