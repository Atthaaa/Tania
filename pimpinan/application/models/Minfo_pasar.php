<?php
class Minfo_pasar extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("info_pasar");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;

        $this->db->select('info_pasar.*, admin.id_admin'); // Pastikan kolom yang diambil benar
        $this->db->from('info_pasar');
        $this->db->join('admin', 'info_pasar.id_admin = admin.id_admin', 'left');
        $q = $this->db->get('admin');

        $s = $a->result_array();
        return $s;

    }

    function simpan($inputan)
    {
        // Ambil `id_admin` dari session
        $inputan['id_admin'] = $this->session->userdata('id_admin');

        // Konfigurasi upload foto
        $config['upload_path'] = $this->config->item('assets_info_pasar');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // Upload foto
        $ngupload = $this->upload->do_upload('gambar_info_pasar');

        if ($ngupload) {
            $inputan['gambar_info_pasar'] = $this->upload->data('file_name');
        }

        // Simpan data ke tabel `info_pasar`
        $this->db->insert('info_pasar', $inputan);
        }

    function hapus($id_info_pasar)
    {

        // delete from artikel where id_artikel=5
        $this->db->where('id_info_pasar', $id_info_pasar);
        $this->db->delete('info_pasar');
    }

    function detail($id_info_pasar)
    {
        // Select * from artikel where id_artikel = 4
        $this->db->where('id_info_pasar', $id_info_pasar);
        $q = $this->db->get('info_pasar');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_info_pasar)
    {
        // Ngurusi foto artikel jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_info_pasar');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('gambar_info_pasar');

        // jika upload
        if ($upload) {
            $inputan['gambar_info_pasar'] = $this->upload->data('file_name');
        }

        // query update sesuai id_artikel
        $this->db->where('id_info_pasar', $id_info_pasar);
        $this->db->update('info_pasar', $inputan);
    }
}
