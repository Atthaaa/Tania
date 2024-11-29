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

    public function tambah()
{
    // Load model
    $this->load->model('Mhama_penyakit');

    // Ambil inputan dari formulir
    $inputan = $this->input->post();

    // Form validation
    $this->form_validation->set_rules("judul_hama_penyakit", "Nama hama penyakit", "required");
    $this->form_validation->set_message("required", "%s wajib diisi");

    // Jika form valid
    if ($this->form_validation->run() == true) {
        // Tambahkan ID otomatis ke inputan
        $inputan['id_hama_penyakit'] = $this->Mhama_penyakit->generate_id();

        // Simpan data
        $this->Mhama_penyakit->simpan($inputan);

        // Pesan sukses
        $this->session->set_flashdata('pesan_sukses', 'Data hama penyakit tersimpan');
        redirect('hama_penyakit', 'refresh');
    }

    // Jika belum submit atau form error, load view
    $data['id_hama_penyakit'] = $this->Mhama_penyakit->generate_id(); // ID otomatis
    $this->load->view('header');
    $this->load->view('hama_penyakit_tambah', $data); // Kirim $data ke view
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
