<?php
//require '../modelos/conexion.php';
require'../modelos/Modelo_registro.php';
require'../vistas/view_registro.html';

class registro{

	 public function add_users(){
             
    $obj= new modelo_reg();
    $usuario=$_GET['username'];
    $password=$_GET['password'];
    $nombre=$_GET['nombre'];
    $apellidos=$_GET['apellidos'];
    $obj->insert_registro($usuario, $password, $nombre, $apellidos);
    
    }

}
?>