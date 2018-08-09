<?php
//require '../modelos/modelo_registro';
include 'conexion.php';
class modelo_login{
  private $arrayusuario=array(); 
  private $db;
public function get_users($usuario,$password){
    $this->db= Conexion::conexion();
    $sql='SELECT * FROM alumno WHERE usuario="'.$usuario.'" and contraseña="'.$password.'"';
$smt= $this->db->query($sql);
$fila=$smt->fetch(PDO::FETCH_ASSOC);
if(!$fila==0){
    return 1;
} else {
    return 0;    
}
    
  
}
}

?>

