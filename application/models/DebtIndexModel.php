<?php
 
class DebtIndexModel extends CI_Model
{
    public function __construct()
    {
            $this->load->database();
    }
    public function seeAmountDebt($id)
    {
        $cad = "select fld_cantidad from tbl_deudas where fld_id_usuario = " . $id ;
        $query = $this->db->query($cad);
        return $query->result_array();
    }

    public function seeAmountPay($id)
    {
        $cad = "select fld_cantidad from tbl_pagos where fld_id_usuario = ". $id ;
        $query = $this->db->query($cad);
        return $query->result_array();
    }

}