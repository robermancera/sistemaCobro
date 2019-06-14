<?php

class PayModel extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function seeInfo()
    {
        $cad = "select fld_id, fld_nombre, fld_telefono, fld_correo from users; ";
        $query = $this->db->query($cad);
        return $query->result_array();
    }

    public function putInfo($data)
    {
        return $this->db->insert('tbl_pagos', $data);
    }
}