<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhama_penyakit extends CI_Model
{
    function tampil_hamapenyakit_terbaru()
    {
        $this->db->order_by('id_hama_penyakit');
        $q = $this->db->get('hama_penyakit');
        $this->db->get('hama_penyakit');
        $d = $q->result_array();

        return $d;
    }

    function tampil()
    {

        //melakukan query
        $q = $this->db->get("hama_penyakit");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }
}
