<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpengguna');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['id_pengguna'] = $this->Mpengguna->generate_id();

        $this->load->view('header');
        $this->load->view('register', $data);
        $this->load->view('footer');
    }

    public function save()
    {
        // Validasi form
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('No_HP', 'Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('Jenis_kelamin', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['id_pengguna'] = $this->Mpengguna->generate_id();
            $this->load->view('register', $data);
        } else {
            // Data untuk disimpan
            $data = [
                'id_pengguna' => $this->input->post('id_pengguna'),
                'Username' => $this->input->post('Username'),
                'Password' => sha1($this->input->post('Password')), // Harusnya dienkripsi
                'Nama' => $this->input->post('Nama'),
                'No_HP' => $this->input->post('No_HP'),
                'Jenis_kelamin' => $this->input->post('Jenis_kelamin'),
            ];

            if ($this->Mpengguna->save($data)) {
                // Flashdata pesan sukses
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil disimpan!');
            } else {
                // Flashdata pesan gagal
                $this->session->set_flashdata('pesan_gagal', 'Data gagal disimpan.');
            }
            redirect('register');
        }
    }

    public function login() {
        // Set validation rules
        $this->form_validation->set_rules('Username', 'Username', 'trim|required');
        $this->form_validation->set_rules('Password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the view with errors
            $this->load->view('footer');
        } else {
            // Get input data
            $username = $this->input->post('Username');
            $password = $this->input->post('Password');

            // Attempt to validate user
            $user = $this->Login_model->validate_user($username, $password);

            if ($user) {
                // Login successful
                $user_data = array(
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'logged_in' => TRUE
                );
                
                $this->session->set_userdata($user_data);
                
                // Redirect to dashboard or home page
                redirect('dashboard');
            } else {
                // Login failed
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                redirect('welcome');
            }
        }

        if ($this->Mpengguna->validate_user($data)) {
                // Flashdata pesan sukses
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil disimpan!');
            } else {
                // Flashdata pesan gagal
                $this->session->set_flashdata('pesan_gagal', 'Data gagal disimpan.');
            }
            redirect('home');
    }

}
