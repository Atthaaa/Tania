<?php
class Slider extends CI_Controller
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
        //panggil model slider
        $this->load->model("Mslider");

        $data["slider"] = $this->Mslider->tampil();

        $this->load->view("header");
        $this->load->view("slider_tampil", $data)/*memberikan/ mengoper data dari $data ke view slider tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("caption_slider", "Nama slider", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mslider
            $this->load->model('Mslider');
            //jalankan fungsi simpan()
            $this->Mslider->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data slider tersimpan');

            //redirect ke filter slider utk tampil slider

            redirect('slider', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('slider_tambah');
        $this->load->view('footer');
    }

    function hapus($id_slider)
    {

        //panggilMslider
        $this->load->model('Mslider');

        //jalankan fungsi hapus
        $this->Mslider->hapus($id_slider);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'slider telah terhapus');

        //redirect ke slider utk tampil data
        redirect('slider', 'refresh');
    }

    function edit($id_slider)
    {
        // 1. Tampilkan slider lama
        $this->load->model('Mslider');
        $data['slider'] = $this->Mslider->detail($id_slider);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("caption_slider", "Nama slider", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mslider->edit($inputan, $id_slider);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'slider telah diubah');
            // Redirect
            redirect('slider', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('slider_edit', $data);
        $this->load->view('footer');
    }
}