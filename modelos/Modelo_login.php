<?php
//require '../modelos/modelo_registro';
//require '../modelos/conexion.php';
class modelo_login{
  private $arrayusuario=array(); 
  private $db;
public function get_users($usuario,$password){
    $db=$this->db= Conexion::conexion();
    $sql='SELECT * FROM userinfo WHERE usuario="'.$usuario.'" and password="'.$password.'"';
$smt= $db->query($sql);
$fila=$smt->fetch(PDO::FETCH_ASSOC);
if(!$fila==0){
    return 1;
} else {
    return 0;    
}
    
  
}
}

?>

