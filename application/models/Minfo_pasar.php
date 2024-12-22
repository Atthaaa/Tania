<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minfo_pasar extends CI_Model
{

    function tampil_infopasar_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_info_pasar', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(3);
    
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

    public function rekomendasi($id_info_pasar, $limit = 3)
    {
    // Ambil artikel yang akan dijadikan basis rekomendasi
    $this->db->where('id_info_pasar', $id_info_pasar);
    $basis = $this->db->get('info_pasar')->row_array();

    // Ambil semua artikel kecuali artikel yang dijadikan basis
    $this->db->where('id_info_pasar !=', $id_info_pasar);
    $semua_artikel = $this->db->get('info_pasar')->result_array();

    $rekomendasi = [];
    foreach ($semua_artikel as $artikel) {
        // Hitung cosine similarity antara basis dan artikel lainnya
        $similarity = $this->cosine_similarity($basis['artikel_informasi_pasar'], $artikel['artikel_informasi_pasar']);
        $artikel['nilai_similarity'] = $similarity;
        $rekomendasi[] = $artikel;
    }

    // Urutkan berdasarkan nilai similarity tertinggi
    usort($rekomendasi, function ($a, $b) {
        return $b['nilai_similarity'] <=> $a['nilai_similarity'];
    });

    // Batasi jumlah hasil rekomendasi
    return array_slice($rekomendasi, 0, $limit);
    }

// Fungsi untuk menghitung cosine similarity
    private function cosine_similarity($text1, $text2)
    {
    $words1 = explode(' ', strtolower($text1));
    $words2 = explode(' ', strtolower($text2));
    $intersect = array_intersect($words1, $words2);
    $similarity = count($intersect) / (sqrt(count($words1) * count($words2)));
    return round($similarity, 2);
    }

}
