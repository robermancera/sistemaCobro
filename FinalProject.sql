CREATE DATABASE db_cobranza;

USE db_cobranza;

CREATE TABLE tbl_usuario(fld_id INT(3), fld_nombre VARCHAR(20), fld_telefono INT(10), 
fld_correo VARCHAR(40), fld_password VARCHAR(25), fld_propietario BOOLEAN, primary key(fld_id));

CREATE TABLE tbl_pago(fld_id INT(3), fld_fecha date, fld_cantidad int(20), fld_id_usuario int(20), primary key(fld_id));

CREATE TABLE tbl_deudas(fld_id INT(3), fld_fecha date, fld_cantidad int(20),fld_concepto VARCHAR(255), fld_id_usuario int(20), primary key(fld_id));

