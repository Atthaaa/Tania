<?php
class Mlayanan_keuangan extends CI_Model
{   

    function tampil_layanankeuangan_terbaru()
    {
    // Urutkan berdasarkan ID secara descending agar data terbaru berada di atas
    $this->db->order_by('id_layanan_keuangan', 'DESC');
    
    // Batasi hasil query hanya 4 item
    $this->db->limit(3);
    
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

    public function rekomendasi($id_layanan_keuangan, $limit = 5)
    {
    // Ambil artikel yang akan dijadikan basis rekomendasi
    $this->db->where('id_layanan_keuangan', $id_layanan_keuangan);
    $basis = $this->db->get('layanan_keuangan')->row_array();

    // Ambil semua artikel kecuali artikel yang dijadikan basis
    $this->db->where('id_layanan_keuangan !=', $id_layanan_keuangan);
    $semua_artikel = $this->db->get('layanan_keuangan')->result_array();

    $rekomendasi = [];
    foreach ($semua_artikel as $artikel) {
        // Hitung cosine similarity antara basis dan artikel lainnya
        $similarity = $this->cosine_similarity($basis['artikel_layanan_keuangan'], $artikel['artikel_layanan_keuangan']);
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
