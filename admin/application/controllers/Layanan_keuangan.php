<?php
class Layanan_keuangan extends CI_Controller
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
        //panggil model layanan_keuangan
        $this->load->model("Mlayanan_keuangan");

        $data["layanan_keuangan"] = $this->Mlayanan_keuangan->tampil();

        $this->load->view("header");
        $this->load->view("layanan_keuangan_tampil", $data)/*memberikan/ mengoper data dari $data ke view layanan_keuangan tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_layanan_keuangan", "Nama layanan keuangan", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mlayanan_keuangan
            $this->load->model('Mlayanan_keuangan');
            //jalankan fungsi simpan()
            $this->Mlayanan_keuangan->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data layanan keuangan tersimpan');

            //redirect ke filter hama_penyakit utk tampil layanan_keuangan

            redirect('layanan_keuangan', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('layanan_keuangan_tambah');
        $this->load->view('footer');
    }

    function hapus($id_layanan_keuangan)
    {

        //panggilMartikel
        $this->load->model('Mlayanan_keuangan');

        //jalankan fungsi hapus
        $this->Mlayanan_keuangan->hapus($id_layanan_keuangan);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'layanan keuangan telah terhapus');

        //redirect ke layanan_keuangan utk tampil data
        redirect('layanan_keuangan', 'refresh');
    }

    function edit($id_layanan_keuangan)
    {
        // 1. Tampilkan layanan_keuangan lama
        $this->load->model('Mlayanan_keuangan');
        $data['layanan_keuangan'] = $this->Mlayanan_keuangan->detail($id_layanan_keuangan);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_layanan_keuangan", "Nama layanan keuangan", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mlayanan_keuangan->edit($inputan, $id_layanan_keuangan);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'layanan keuangan telah diubah');
            // Redirect
            redirect('layanan_keuangan', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('layanan_keuangan_edit', $data);
        $this->load->view('footer');
    }
}
