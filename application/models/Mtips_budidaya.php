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
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_tips_budidaya', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(4);
    
    // Ambil data dari tabel
    $q = $this->db->get('tips_budidaya');
    
    // Pecah data menjadi array
    $d = $q->result_array();

    return $d;
    }

    public function cari_tips_budidaya($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_tips_budidaya', $query);
    $query = $this->db->get('tips_budidaya');
    return $query->result_array();
    }

    public function artikel_tipsbudidaya($id_tips_budidaya)
    {
    $this->db->where('id_tips_budidaya', $id_tips_budidaya);
    $query = $this->db->get('tips_budidaya');
    return $query->row_array();
    }

}
