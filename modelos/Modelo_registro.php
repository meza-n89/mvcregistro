<?php
require 'conexion.php';

class modelo_reg{
    private $db;
    private $reguser=array();
    function __construct() {
        $this->db= Conexion::conexion();
    }
public function insert_registro($usuario,$password,$nombre,$apellidos){
$statement= $this->db->prepare('INSERT INTO alumnos (usuario,password,nombre,apellidos) VALUES (:usuario,:password,:nombre,:apellidos)');
$statement->bindParam(':usuario', $usuario);
$statement->bindParam(':password', $password);
$statement->bindParam(':nombre', $nombre);
$statement->bindParam(':apellidos', $apellidos);
$statement->execute();



}
}

?>
