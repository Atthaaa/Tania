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
        $q = $this->db->get("kategori");

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

    function produk($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $q = $this->db->get('produk');
        $d = $q->result_array();

        return $d;
    }
}
