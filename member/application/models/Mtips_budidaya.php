<?php
class Mtips_budidaya extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get('produk');
        $d = $q->result_array();

        return $d;
    }

    function tampil_tipsbudidaya_terbaru()
    {
        $this->db->order_by('id_tips_budidaya', 'desc');
        $q = $this->db->get('tips_budidaya');
        $this->db->get('tips_budidaya', 4, 0);
        $d = $q->result_array();

        return $d;
    }

    function produk_member($id_member)
    {
        $this->db->where('id_member', $id_member);
        $q = $this->db->get('produk');
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan)
    {

        $config['upload_path'] = $this->config->item('assets_produk');
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $ngupload = $this->upload->do_upload("foto_produk");

        if ($ngupload) {
            $inputan['foto_produk'] = $this->upload->data('file_name');
        }

        $inputan['id_member'] = $this->session->userdata('id_member');

        $this->db->insert('produk', $inputan);
    }

    function detail($id_produk)
    {
        // Detail sesuai produk dengan id yang login
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function detail_umum($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function ubah($inputan, $id)
    {
        $config['upload_path'] = $this->config->item('assets_produk');
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $ngupload = $this->upload->do_upload("foto_produk");

        if ($ngupload) {
            $inputan['foto_produk'] = $this->upload->data('file_name');
        }

        $inputan['id_member'] = $this->session->userdata('id_member');

        // Ubah sesuai produk dengan id yang login
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $inputan);
    }

    function hapus($id_produk)
    {
        // Hapus sesuai produk dengan id yang login
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
}
