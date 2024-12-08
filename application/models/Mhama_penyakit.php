<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhama_penyakit extends CI_Model
{
    function tampil_hamapenyakit_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_hama_penyakit', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(4);
    
    // Ambil data dari tabel
    $q = $this->db->get('hama_penyakit');
    
    // Pecah data menjadi array
    $d = $q->result_array();

    return $d;
    }


    function tampil()
    {

        //melakukan query
        $q = $this->db->get("hama_penyakit");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }

    public function cari_hama_penyakit($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_hama_penyakit', $query);
    $query = $this->db->get('hama_penyakit');
    return $query->result_array();
    }

    public function artikel_hamapenyakit($id_hama_penyakit)
    {
    $this->db->where('id_hama_penyakit', $id_hama_penyakit);
    $query = $this->db->get('hama_penyakit');
    return $query->row_array();
    }


}
