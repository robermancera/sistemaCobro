<?php
 
class RegisterModel extends CI_Model{
    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        //return $this->db->query('tbl_usuario', $data);
        return $this->db->query("insert into tbl_usuario (fld_id, fld_nombre, fld_correo, fld_password, fld_propietario, fld_telefono) values (90,'Eduardo','eduardo@e.com','123','0','123456'");
    }
}