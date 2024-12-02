<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpengguna extends CI_Model
{
  function login($inputan)
  {
    $username = $inputan['Username'];
    $password = $inputan['Password'];
    $password = sha1($password);

    // cek ke database
    $this->db->where('Username', $username);
    $this->db->where('Password', $password);
    $q = $this->db->get('pengguna');
    $cekpengguna = $q->row_array();

    // jika tidak kosong maka ada
    if (!empty($cekpengguna)) {
      $this->session->set_userdata('id_pengguna', $cekpengguna['id_pengguna']);
      $this->session->set_userdata('Nama', $cekpengguna['Nama']);
      $this->session->set_userdata('No_HP', $cekpengguna['No_HP']);
      $this->session->set_userdata('Jenis_kelamin', $cekpengguna['Jenis_kelamin']);
      return "ada";
    } else {
      return "gak ada";
    }
  }

  function tampil()
  {
    $q = $this->db->get('pengguna');
    $d = $q->result_array();
    return $d;
  }

  function detail($id_pengguna)
  {
    $this->db->where('id_pengguna', $id_pengguna);
    $q = $this->db->get('pengguna');
    $d = $q->row_array();
    return $d;
  }

  function ubah($inputan, $id_pengguna)
  {
    // jika Password tidak kosong, maka enkripsi
    if (!empty($inputan['Password'])) {
      $inputan['Password'] = sha1($inputan['Password']);
    } else {
      unset($inputan['Password']);
    }

    $this->db->where('id_pengguna', $id_pengguna);
    $this->db->update('pengguna', $inputan);

    // Dapatkan data pengguna baru yang telah di update
    $this->db->where('id_pengguna', $id_pengguna);
    $q = $this->db->get('pengguna');
    $cekpengguna = $q->row_array();

    // buat tiket lagi
    $this->session->set_userdata('id_pengguna', $cekpengguna['id_pengguna']);
    $this->session->set_userdata('Username', $cekpengguna['Username']);
    $this->session->set_userdata('Nama', $cekpengguna['Nama']);
    $this->session->set_userdata('No_HP', $cekpengguna['No_HP']);
    $this->session->set_userdata('Jenis_kelamin', $cekpengguna['Jenis_kelamin']);
  }

  function register($m)
  {
    $this->db->insert('pengguna', $m);
  }
}
