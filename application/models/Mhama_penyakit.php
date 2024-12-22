<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhama_penyakit extends CI_Model
{   

    function tampil()
    {

        //melakukan query
        $q = $this->db->get("hama_penyakit");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }

    function tampil_hamapenyakit_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_hama_penyakit', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(3);
    
    // Ambil data dari tabel
    $q = $this->db->get('hama_penyakit');
    
    // Pecah data menjadi array
    $d = $q->result_array();

    return $d;
    }


    public function artikel_hamapenyakit($id_hama_penyakit)
    {
        $this->db->where('id_hama_penyakit', $id_hama_penyakit);
        $query = $this->db->get('hama_penyakit');
        return $query->row_array();
    }

    public function cari_hama_penyakit($query)
    {
    // Query untuk mencari layanan keuangan berdasarkan judul
    $this->db->like('judul_hama_penyakit', $query);
    $query = $this->db->get('hama_penyakit');
    return $query->result_array();
    }

    public function rekomendasi($id_hama_penyakit, $limit = 3)
    {
    // Ambil artikel yang akan dijadikan basis rekomendasi
    $this->db->where('id_hama_penyakit', $id_hama_penyakit);
    $basis = $this->db->get('hama_penyakit')->row_array();

    // Ambil semua artikel kecuali artikel yang dijadikan basis
    $this->db->where('id_hama_penyakit !=', $id_hama_penyakit);
    $semua_artikel = $this->db->get('hama_penyakit')->result_array();

    $rekomendasi = [];
    foreach ($semua_artikel as $artikel) {
        // Hitung cosine similarity antara basis dan artikel lainnya
        $similarity = $this->cosine_similarity($basis['artikel_hama_penyakit'], $artikel['artikel_hama_penyakit']);
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
