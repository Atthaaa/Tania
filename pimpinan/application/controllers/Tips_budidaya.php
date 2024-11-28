<?php
class Tips_budidaya extends CI_Controller
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
        //panggil model hama_penyakit
        $this->load->model("Mtips_budidaya");

        $data["tips_budidaya"] = $this->Mtips_budidaya->tampil();

        $this->load->view("header");
        $this->load->view("tips_budidaya_tampil", $data)/*memberikan/ mengoper data dari $data ke view tips_budidaya tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_tips_budidaya", "Nama tips budidaya", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mtips_budidaya
            $this->load->model('Mtips_budidaya');
            //jalankan fungsi simpan()
            $this->Mtips_budidaya->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data tips budidaya tersimpan');

            //redirect ke filter hama_penyakit utk tampil tips_budidaya

            redirect('tips_budidaya', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('tips_budidaya_tambah');
        $this->load->view('footer');
    }

    function hapus($id_tips_budidaya)
    {

        //panggilMartikel
        $this->load->model('Mtips_budidaya');

        //jalankan fungsi hapus
        $this->Mtips_budidaya->hapus($id_tips_budidaya);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'tips budidaya telah terhapus');

        //redirect ke tips_budidaya utk tampil data
        redirect('tips_budidaya', 'refresh');
    }

    function edit($id_tips_budidaya)
    {
        // 1. Tampilkan tips_budidaya lama
        $this->load->model('Mtips_budidaya');
        $data['tips_budidaya'] = $this->Mtips_budidaya->detail($id_tips_budidaya);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_tips_budidaya", "Nama tips budidaya", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mtips_budidaya->edit($inputan, $id_tips_budidaya);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'tips budidaya telah diubah');
            // Redirect
            redirect('tips_budidaya', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('tips_budidaya_edit', $data);
        $this->load->view('footer');
    }
}
