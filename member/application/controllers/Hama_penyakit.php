<?php
class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }
    function index()
    {

        //panggil model Mproduk dan fungsi tampil()

        $this->load->model('Mproduk');
        $data['produk'] = $this->Mproduk->tampil();

        $this->load->view('header');
        $this->load->view('produk_tampil', $data);
        $this->load->view('footer');
    }

    function detail($id_produk)
    {
        $this->load->model('Mproduk');
        $data['produk'] = $this->Mproduk->detail_umum($id_produk);

        if ($inputan = $this->input->post()) {
            $this->load->model('Mkeranjang');
            $this->Mkeranjang->simpan($inputan, $id_produk);

            $this->session->set_flashdata('pesan_sukses', 'Produk masuk ke keranjang belanja');
            redirect('', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('produk_detail', $data);
        $this->load->view('footer');
    }
}
