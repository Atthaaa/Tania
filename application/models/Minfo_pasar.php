<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minfo_pasar extends CI_Model
{

    function tampil_infopasar_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_info_pasar', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(4);
    
    // Ambil data dari tabel
    $q = $this->db->get('info_pasar');
    
    // Pecah data menjadi array
    $d = $q->result_array();

    return $d;
    }

    function tampil()
    {
        $q = $this->db->get('info_pasar');
        $d = $q->result_array();
        return $d;
    }

    public function cari_info_pasar($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_info_pasar', $query);
    $query = $this->db->get('info_pasar');
    return $query->result_array();
    }

    public function artikel_infopasar($id_info_pasar)
    {
    $this->db->where('id_info_pasar', $id_info_pasar);
    $query = $this->db->get('info_pasar');
    return $query->row_array();
    }

}
