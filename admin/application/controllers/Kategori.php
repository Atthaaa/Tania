<?php
class Kategori extends CI_Controller
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
        //panggil model kategori
        $this->load->model("Mkategori");

        $data["kategori"] = $this->Mkategori->tampil();

        $this->load->view("header");
        $this->load->view("kategori_tampil", $data)/*memberikan/ mengoper data dari $data ke view kategori tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_kategori", "Nama Kategori", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mkategori
            $this->load->model('Mkategori');
            //jalankan fungsi simpan()
            $this->Mkategori->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data kategori tersimpan');

            //redirect ke filter kategori utk tampil kategori

            redirect('kategori', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('kategori_tambah');
        $this->load->view('footer');
    }

    function hapus($id_kategori)
    {

        //panggilMkategori
        $this->load->model('Mkategori');

        //jalankan fungsi hapus
        $this->Mkategori->hapus($id_kategori);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'kategori telah terhapus');

        //redirect ke kategori utk tampil data
        redirect('kategori', 'refresh');
    }

    function edit($id_kategori)
    {
        // 1. Tampilkan kategori lama
        $this->load->model('MKategori');
        $data['kategori'] = $this->MKategori->detail($id_kategori);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_kategori", "Nama Kategori", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->MKategori->edit($inputan, $id_kategori);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'kategori telah diubah');
            // Redirect
            redirect('kategori', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('kategori_edit', $data);
        $this->load->view('footer');
    }
}
