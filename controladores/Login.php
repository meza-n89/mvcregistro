<?php
//require'modelos/conexion.php';
require '../modelos/Modelo_login.php';
//$obj= new modelo_reg();

//$statement= $obj->get_usuarios();

class login{
    
public function login_user(){
    $obj= new modelo_login();
    
    $usuario=$_GET['usuario'];
    $password=$_GET['password'];
    $valid=$obj->get_users($usuario, $password);
    echo $valid;
    if(!$valid==0){
        header('location:../vistas/view_perfil.html');
    }else{
        header('location:../vistas/view_login.html');
    }
    

}
}




?>
