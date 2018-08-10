<?php
//require '../modelos/modelo_registro';
//include 'conexion.php';
class modelo_login{
  private $arrayusuario=array(); 
  private $db;
public function get_users($usuario,$password){
    $this->db= Conexion::conexion();
    $sql='SELECT * FROM alumno WHERE usuario="'.$usuario.'" and password="'.$password.'"';
$smt= $this->db->query($sql);
$x=0;

while($fila=$smt->fetch(PDO::FETCH_ASSOC)){
    $this->arrayusuario[]=$fila;
    $x++;
    
}
if(!$x==0){
    return $this->arrayusuario;
} else {
    return 0;    
}


    
  
}
}

?>

