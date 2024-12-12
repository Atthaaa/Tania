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

    public function rekomendasi($id_tips_budidaya, $limit = 5)
    {
    // Ambil artikel yang akan dijadikan basis rekomendasi
    $this->db->where('id_tips_budidaya', $id_tips_budidaya);
    $basis = $this->db->get('tips_budidaya')->row_array();

    // Ambil semua artikel kecuali artikel yang dijadikan basis
    $this->db->where('id_tips_budidaya !=', $id_tips_budidaya);
    $semua_artikel = $this->db->get('tips_budidaya')->result_array();

    $rekomendasi = [];
    foreach ($semua_artikel as $artikel) {
        // Hitung cosine similarity antara basis dan artikel lainnya
        $similarity = $this->cosine_similarity($basis['artikel_tips_budidaya'], $artikel['artikel_tips_budidaya']);
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
