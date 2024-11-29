<?php
class Mtips_budidaya extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("tips_budidaya");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;

        $this->db->select('tips_budidaya.*, admin.id_admin'); // Pastikan kolom yang diambil benar
        $this->db->from('tips_budidaya');
        $this->db->join('admin', 'tips_budidaya.id_admin = admin.id_admin', 'left');
        $q = $this->db->get('admin');

        $s = $a->result_array();
        return $s;

    }

    function simpan($inputan)
    {
        // Ambil `id_admin` dari session
        $inputan['id_admin'] = $this->session->userdata('id_admin');

        // Konfigurasi upload foto
        $config['upload_path'] = $this->config->item('assets_tips_budidaya');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // Upload foto
        $ngupload = $this->upload->do_upload('gambar_tips_budidaya');

        if ($ngupload) {
            $inputan['gambar_tips_budidaya'] = $this->upload->data('file_name');
        }

        // Simpan data ke tabel `tips_budidaya`
        $this->db->insert('tips_budidaya', $inputan);
        }

    public function generate_id()
    {
        // Ambil ID terakhir dari database
        $this->db->select('id_tips_budidaya');
        $this->db->order_by('id_tips_budidaya', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tips_budidaya');

        if ($query->num_rows() > 0) {
            // Ambil ID terakhir
            $last_id = $query->row()->id_tips_budidaya;
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


    function hapus($id_tips_budidaya)
    {

        // delete from artikel where id_artikel=5
        $this->db->where('id_tips_budidaya', $id_tips_budidaya);
        $this->db->delete('tips_budidaya');
    }

    function detail($id_tips_budidaya)
    {
        // Select * from artikel where id_artikel = 4
        $this->db->where('id_tips_budidaya', $id_tips_budidaya);
        $q = $this->db->get('tips_budidaya');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_tips_budidaya)
    {
        // Ngurusi foto artikel jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_tips_budidaya');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('gambar_tips_budidaya');

        // jika upload
        if ($upload) {
            $inputan['gambar_tips_budidaya'] = $this->upload->data('file_name');
        }

        // query update sesuai id_artikel
        $this->db->where('id_tips_budidaya', $id_tips_budidaya);
        $this->db->update('tips_budidaya', $inputan);
    }
}
