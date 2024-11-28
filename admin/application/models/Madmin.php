<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{
  public function login($inputan)
  {
    // Ambil username dan password dari inputan
    $username = $inputan['username'];
    $password = sha1($inputan['password']); // Hash password dengan sha1

    // Query untuk mengecek data admin di database
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('admin'); // Ganti 'admin' dengan nama tabel admin Anda

    // Ambil hasil query
    $cekadmin = $query->row_array();

    // Jika admin ditemukan
    if (!empty($cekadmin)) {
      // Simpan data admin ke session
      $this->session->set_userdata('id_admin', $cekadmin['id_admin']);
      $this->session->set_userdata('username', $cekadmin['username']);
      return "ada";
    } else {
      // Admin tidak ditemukan
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