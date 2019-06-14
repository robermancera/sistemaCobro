<?php

class DebtModel extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }

    public function putInfo($data)
    {
        return $this->db->insert('tbl_deudas', $data);
    }
}