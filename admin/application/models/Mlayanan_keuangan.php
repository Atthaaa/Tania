<?php
class Mlayanan_keuangan extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("layanan_keuangan");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;

        $this->db->select('layanan_keuangan.*, admin.id_admin'); // Pastikan kolom yang diambil benar
        $this->db->from('layanan_keuangan');
        $this->db->join('admin', 'layanan_keuangan.id_admin = admin.id_admin', 'left');
        $q = $this->db->get('admin');

        $s = $a->result_array();
        return $s;

    }

    function simpan($inputan)
    {
        // Ambil `id_admin` dari session
        $inputan['id_admin'] = $this->session->userdata('id_admin');

        // Konfigurasi upload foto
        $config['upload_path'] = $this->config->item('assets_hama_penyakit');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // Upload foto
        $ngupload = $this->upload->do_upload('gambar_layanan_keuangan');

        if ($ngupload) {
            $inputan['gambar_layanan_keuangan'] = $this->upload->data('file_name');
        }

        // Simpan data ke tabel `layanan_keuangan`
        $this->db->insert('layanan_keuangan', $inputan);
        }

    public function generate_id()
    {
        // Ambil ID terakhir dari database
        $this->db->select('id_layanan_keuangan');
        $this->db->order_by('id_layanan_keuangan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('layanan_keuangan');

        if ($query->num_rows() > 0) {
            // Ambil ID terakhir
            $last_id = $query->row()->id_layanan_keuangan;
            // Ambil angka terakhir dari ID, misalnya HP001 -> 001
            $last_number = (int) substr($last_id, 2);
            // Tambahkan 1 ke angka terakhir
            $new_number = $last_number + 1;
            // Format angka menjadi 3 digit dengan prefix 'HP'
            return 'HP' . str_pad($new_number, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika tidak ada data, mulai dari HP001
            return 'HP001';
        }
    }


    function hapus($id_layanan_keuangan)
    {

        // delete from artikel where id_artikel=5
        $this->db->where('id_layanan_keuangan', $id_layanan_keuangan);
        $this->db->delete('layanan_keuangan');
    }

    function detail($id_layanan_keuangan)
    {
        // Select * from artikel where id_artikel = 4
        $this->db->where('id_layanan_keuangan', $id_layanan_keuangan);
        $q = $this->db->get('layanan_keuangan');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_layanan_keuangan)
    {
        // Ngurusi foto artikel jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_layanan_keuangan');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('gambar_layanan_keuangan');

        // jika upload
        if ($upload) {
            $inputan['gambar_layanan_keuangan'] = $this->upload->data('file_name');
        }

        // query update sesuai id_artikel
        $this->db->where('id_layanan_keuangan', $id_layanan_keuangan);
        $this->db->update('layanan_keuangan', $inputan);
    }
}
