<?php
class Mhama_penyakit extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("hama_penyakit");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;

        $this->db->select('hama_penyakit.*, admin.id_admin'); // Pastikan kolom yang diambil benar
        $this->db->from('hama_penyakit');
        $this->db->join('admin', 'hama_penyakit.id_admin = admin.id_admin', 'left');
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
        $ngupload = $this->upload->do_upload('gambar_hama_penyakit');

        if ($ngupload) {
            $inputan['gambar_hama_penyakit'] = $this->upload->data('file_name');
        }

        // Simpan data ke tabel `hama_penyakit`
        $this->db->insert('hama_penyakit', $inputan);
        }

    function hapus($id_hama_penyakit)
    {

        // delete from artikel where id_artikel=5
        $this->db->where('id_hama_penyakit', $id_hama_penyakit);
        $this->db->delete('hama_penyakit');
    }

    function detail($id_hama_penyakit)
    {
        // Select * from artikel where id_artikel = 4
        $this->db->where('id_hama_penyakit', $id_hama_penyakit);
        $q = $this->db->get('hama_penyakit');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_hama_penyakit)
    {
        // Ngurusi foto artikel jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_hama_penyakit');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('gambar_hama_penyakit');

        // jika upload
        if ($upload) {
            $inputan['gambar_hama_penyakit'] = $this->upload->data('file_name');
        }

        // query update sesuai id_artikel
        $this->db->where('id_hama_penyakit', $id_hama_penyakit);
        $this->db->update('hama_penyakit', $inputan);
    }
}
