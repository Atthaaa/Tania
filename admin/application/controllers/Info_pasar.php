<?php
class Info_pasar extends CI_Controller
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
        $this->load->model("Minfo_pasar");

        $data["info_pasar"] = $this->Minfo_pasar->tampil();

        $this->load->view("header");
        $this->load->view("info_pasar_tampil", $data)/*memberikan/ mengoper data dari $data ke view info_pasar tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_info_pasar", "Nama info pasar", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Minfo_pasar
            $this->load->model('Minfo_pasar');
            //jalankan fungsi simpan()
            $this->Minfo_pasar->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data info pasar tersimpan');

            //redirect ke filter hama_penyakit utk tampil info_pasar

            redirect('info_pasar', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('info_pasar_tambah');
        $this->load->view('footer');
    }

    function hapus($id_info_pasar)
    {

        //panggilMartikel
        $this->load->model('Minfo_pasar');

        //jalankan fungsi hapus
        $this->Minfo_pasar->hapus($id_info_pasar);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'info pasar telah terhapus');

        //redirect ke info_pasar utk tampil data
        redirect('info_pasar', 'refresh');
    }

    function edit($id_info_pasar)
    {
        // 1. Tampilkan info_pasar lama
        $this->load->model('Minfo_pasar');
        $data['info_pasar'] = $this->Minfo_pasar->detail($id_info_pasar);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_info_pasar", "Nama info pasar", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Minfo_pasar->edit($inputan, $id_info_pasar);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'info pasar telah diubah');
            // Redirect
            redirect('info_pasar', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('info_pasar_edit', $data);
        $this->load->view('footer');
    }
}
