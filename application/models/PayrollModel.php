<?php
 
class PayrollModel extends CI_Model
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

}
