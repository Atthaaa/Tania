<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpimpinan extends CI_Model
{
    function login($inputan)
  {
    $username = $inputan['username'];
    $password = $inputan['password'];
    $password = sha1($password);

    // cek ke database
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $q = $this->db->get('pimpinan');
    $cekmember = $q->row_array();

    // jika tidak kosong maka ada
    if (!empty($cekmember)) {
      // Membuat tiket bisokop yang dipake selama keliling aplikasi
      $this->session->set_userdata('id_pimpinan', $cekmember['id_pimpinan']);
      $this->session->set_userdata('username', $cekmember['username']);
      $this->session->set_userdata('password', $cekmember['password']);
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

    function jumlah_konten()
    {
    $query = "
        SELECT 
            'hama_penyakit' AS kategori, 
            COUNT(*) AS jumlah 
        FROM hama_penyakit
        UNION ALL
        SELECT 
            'info_pasar' AS kategori, 
            COUNT(*) AS jumlah 
        FROM info_pasar
        UNION ALL
        SELECT 
            'layanan_keuangan' AS kategori, 
            COUNT(*) AS jumlah 
        FROM layanan_keuangan
        UNION ALL
        SELECT 
            'tips_budidaya' AS kategori, 
            COUNT(*) AS jumlah 
        FROM tips_budidaya
    ";
    $q = $this->db->query($query);
    $data = $q->result_array();
    return $data;
    }

     function hapus($id_pengguna)
    {

        // delete from artikel where id_artikel=5
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->delete('pengguna');
    }

    function edit($inputan, $id_pengguna)
    {
        // query update sesuai id_artikel
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('pengguna', $inputan);
    }

    function detail($id_pengguna)
    {
        // Select * from artikel where id_artikel = 4
        $this->db->where('id_pengguna', $id_pengguna);
        $q = $this->db->get('pengguna');
        $d = $q->row_array();

        return $d;
    }
}
