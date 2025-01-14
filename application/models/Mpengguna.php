<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengguna extends CI_Model
{
    // Function untuk generate ID pengguna otomatis
    public function generate_id()
    {
        $this->db->select('id_pengguna');
        $this->db->order_by('id_pengguna', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengguna');

        if ($query->num_rows() > 0) {
            $last_id = $query->row()->id_pengguna;
            $last_number = (int) substr($last_id, 1);
            $new_number = $last_number + 1;
            return 'P' . str_pad($new_number, 3, '0', STR_PAD_LEFT);
        } else {
            return 'P001';
        }
    }

    function login($inputan)
  {
    $username = $inputan['Username'];
    $password = $inputan['Password'];
    $password = sha1($password);

    // cek ke database
    $this->db->where('Username', $username);
    $this->db->where('Password', $password);
    $q = $this->db->get('pengguna');
    $cekmember = $q->row_array();

    // jika tidak kosong maka ada
    if (!empty($cekmember)) {
      // Membuat tiket bisokop yang dipake selama keliling aplikasi
      $this->session->set_userdata('id_pengguna', $cekmember['id_pengguna']);
      $this->session->set_userdata('Username', $cekmember['Username']);
      $this->session->set_userdata('Nama', $cekmember['Nama']);
      $this->session->set_userdata('Password', $cekmember['Password']);
      $this->session->set_userdata('No_HP', $cekmember['No_HP']);
      return "ada";
    } else {
      return "gak ada";
    }
  }

    // Function untuk menyimpan data pengguna
    public function save($data)
    {
        return $this->db->insert('pengguna', $data);
    }
}
