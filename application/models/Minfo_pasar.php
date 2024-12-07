<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minfo_pasar extends CI_Model
{

    function tampil_infopasar_terbaru()
    {
        $this->db->order_by('id_info_pasar', 'desc');
        $q = $this->db->get('info_pasar');
        $this->db->get('info_pasar', 4, 0);
        $d = $q->result_array();

        return $d;
    }

    function tampil()
    {
        $q = $this->db->get('info_pasar');
        $d = $q->result_array();
        return $d;
    }

    function detail($id_transaksi)
    {
        $this->db->where('id_transaksi', $id_transaksi);
        $q = $this->db->get('transaksi');
        $d = $q->row_array();

        return $d;
    }

    function transaksi_detail($id_transaksi)
    {
        $this->db->where('id_transaksi', $id_transaksi);
        $q = $this->db->get('transaksi_detail');
        $d = $q->result_array();

        return $d;
    }
}
