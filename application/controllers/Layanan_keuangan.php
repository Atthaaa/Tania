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

        // dapatkan id member yg login
        $id_member = $this->session->userdata('id_member');

        // panggil model Mtransaksi dan fungsi transaksi_member_beli
        $this->load->model('Mtransaksi');
        $data['transaksi'] = $this->Mtransaksi->transaksi_member_beli($id_member);

        $this->load->view('header');
        $this->load->view('transaksi_tampil', $data);
        $this->load->view('footer');
    }

    function detail($id_transaksi)
    {
        // Panggil model Mtransaksi
        $this->load->model("Mtransaksi");

        // Panggil fungsi detail()
        $data['transaksi'] = $this->Mtransaksi->detail($id_transaksi);

        if ($data['transaksi']['id_member_beli'] !== $this->session->userdata('id_member')) {
            $this->session->set_flashdata('pesan_gagal', 'tidak valid');
            redirect('transaksi', 'refresh');
        }

        // Panggil fungsi transaksi_detail()
        $data['transaksi_detail'] = $this->Mtransaksi->transaksi_detail($id_transaksi);

        include 'midtrans-php/Midtrans.php';

        \Midtrans\Config::$serverKey = 'SB-Mid-server-zB-lv9suEcEx8u6rYPEyF2X8';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array()
        );

        $params['transaction_details']['order_id'] = $data['transaksi']['kode_transaksi'];
        $params['transaction_details']['gross_amount'] = $data['transaksi']['total_transaksi'];

        $snapToken = "";

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        } catch (Exception $e) {
            //throw $e;
        }
        $data['snapToken'] = $snapToken;

        // cek data di midtrans
        $data['cekmidtrans'] = [];
        try {
            if ($data['transaksi']['status_transaksi'] == 'pesan') {
                $responsi = \Midtrans\Transaction::status($data['transaksi']['kode_transaksi']);
                if (isset($responsi->status_code) && in_array((string) $responsi->status_code, [200, 201, 407])) {
                    $data['cekmidtrans'] = $responsi;

                    if ($responsi->transaction_status == 'settlement') {
                        $this->Mtransaksi->set_lunas($id_transaksi);
                        redirect('transaksi/detail/' . $id_transaksi, 'refresh');
                    }
                }
            }
        } catch (Exception $e) {
            // 
        }

        if ($this->input->post()) {
            $this->Mtransaksi->kirim_rating($this->input->post());
            $this->session->set_flashdata('pesan_sukses', 'Ulasan telah terkirim');
            redirect('transaksi/detail/' . $id_transaksi, 'refresh');
        }

        $this->load->view('header');
        $this->load->view('transaksi_detail', $data);
        $this->load->view('footer');
    }
}
