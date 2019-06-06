<?php
 
class LoginModel extends CI_Model {
 
    public function checkLogin($phone, $password) {
        //query the table 'users' and get the result count
        $this->db->where('fld_telefono', $phone);
        $this->db->where('fld_password', $password);
        $query = $this->db->get('tbl_usuario');
 
        return $query->num_rows();
    }
}