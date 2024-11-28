<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{
  function login($inputan)
  {
    $username = $inputan['username'];
    $password = $inputan['password'];
    $password = sha1($password);

    // cek ke database
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $q = $this->db->get('admin');
    echo $this->db->last_query(); // Debug untuk melihat query yang dijalankan
    print_r($q->result_array());  // Debug untuk melihat hasil query
    $cekadmin = $q->row_array();

    // jika tidak kosong maka ada
    if (!empty($cekadmin)) {
      // Membuat tiket bisokop yang dipake selama keliling aplikasi
      $this->session->set_userdata('id_admin', $cekadmin['id_admin']);
      $this->session->set_userdata('username', $cekadmin['username']);
      return "ada";
    } else {
      return "gak ada";
    }
  }

  function ubah($inputan, $id_admin)
  {
    // jika password tidak kosong, maka enkripsi
    if (!empty($inputan['password'])) {
      $inputan['password'] = sha1($inputan['password']);
    } else {
      unset($inputan['password']);
    }

    $this->db->where('id_admin', $id_admin);
    $this->db->update('admin', $inputan);

    // karena akun admin telah diubah pada database maka tiket bioskop harus membuat baru

    // Dapatkan data admin baru yang telah di update
    $this->db->where('id_admin', $id_admin);
    $q = $this->db->get('admin');
    $cekadmin = $q->row_array();

    // buat tiket lagi
    $this->session->set_userdata('id_admin', $cekadmin['id_admin']);
    $this->session->set_userdata('username', $cekadmin['username']);
  }
}