<?php
class Mtips_budidaya extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get('tips_budidaya');
        $d = $q->result_array();

        return $d;
    }

    function tampil_tipsbudidaya_terbaru()
    {
        $this->db->order_by('id_tips_budidaya', 'desc');
        $q = $this->db->get('tips_budidaya');
        $this->db->get('tips_budidaya', 4, 0);
        $d = $q->result_array();

        return $d;
    }

    function detail($id_produk)
    {
        // Detail sesuai produk dengan id yang login
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function detail_umum($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }
}
