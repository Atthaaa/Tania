<?php
class Mlayanan_keuangan extends CI_Model
{   

    function tampil_layanankeuangan_terbaru()
    {
        $this->db->order_by('id_layanan_keuangan', 'desc');
        $q = $this->db->get('layanan_keuangan');
        $this->db->get('layanan_keuangan', 4, 0);
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

    function detail($id_kategori)
    {
        // Select * from kategori where id_kategori = 4
        $this->db->where('id_kategori', $id_kategori);
        $q = $this->db->get('kategori');
        $d = $q->row_array();

        return $d;
    }

   public function cari_layanan_keuangan($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_layanan_keuangan', $query);
    $query = $this->db->get('layanan_keuangan');
    return $query->result_array();
    }

    

}
