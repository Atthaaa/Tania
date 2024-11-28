<?php
class Mslider extends CI_Model
{
  function tampil()
  {

    //melakukan query
    $q = $this->db->get("slider");

    //wajib kita pecah ke array
    $d = $q->result_array();

    return $d;
  }
}
