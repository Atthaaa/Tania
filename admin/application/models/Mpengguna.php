<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpengguna extends CI_Model
{
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
}
