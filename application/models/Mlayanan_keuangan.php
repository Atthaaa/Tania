<?php
class Mlayanan_keuangan extends CI_Model
{   

    function tampil_layanankeuangan_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_layanan_keuangan', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(4);
    
    // Ambil data dari tabel
    $q = $this->db->get('layanan_keuangan');
    
    // Pecah data menjadi array
    $d = $q->result_array();

    return $d;
    }

    function tampil()
    {

        //melakukan query
        $q = $this->db->get("layanan_keuangan");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }


   public function cari_layanan_keuangan($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_layanan_keuangan', $query);
    $query = $this->db->get('layanan_keuangan');
    return $query->result_array();
    }

    public function artikel_layanankeuangan($id_layanan_keuangan)
    {
    $this->db->where('id_layanan_keuangan', $id_layanan_keuangan);
    $query = $this->db->get('layanan_keuangan');
    return $query->row_array();
    }

    

}
