<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpengguna extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get('pengguna');
        $d = $q->result_array();
        return $d;
    }
}
