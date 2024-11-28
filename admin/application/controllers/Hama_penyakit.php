<?php
class Hama_penyakit extends CI_Controller
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
        $this->load->model("Mhama_penyakit");

        $data["hama_penyakit"] = $this->Mhama_penyakit->tampil();

        $this->load->view("header");
        $this->load->view("hama_penyakit_tampil", $data)/*memberikan/ mengoper data dari $data ke view hama_penyakit tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_hama_penyakit", "Nama hama penyakit", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Martikel
            $this->load->model('Mhama_penyakit');
            //jalankan fungsi simpan()
            $this->Mhama_penyakit->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data hama penyakit tersimpan');

            //redirect ke filter hama_penyakit utk tampil hama_penyakit

            redirect('hama_penyakit', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('hama_penyakit_tambah');
        $this->load->view('footer');
    }

    function hapus($id_hama_penyakit)
    {

        //panggilMartikel
        $this->load->model('Mhama_penyakit');

        //jalankan fungsi hapus
        $this->Mhama_penyakit->hapus($id_hama_penyakit);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'hama penyakit telah terhapus');

        //redirect ke hama_penyakit utk tampil data
        redirect('hama_penyakit', 'refresh');
    }

    function edit($id_hama_penyakit)
    {
        // 1. Tampilkan hama_penyakit lama
        $this->load->model('Mhama_penyakit');
        $data['hama_penyakit'] = $this->Mhama_penyakit->detail($id_hama_penyakit);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_hama_penyakit", "Nama hama penyakit", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mhama_penyakit->edit($inputan, $id_hama_penyakit);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'hama penyakit telah diubah');
            // Redirect
            redirect('hama_penyakit', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('hama_penyakit_edit', $data);
        $this->load->view('footer');
    }
}
