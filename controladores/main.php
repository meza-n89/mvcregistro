<?php

require '../controladores/Registro.php';
require '../controladores/Login.php';

$main=$_GET['main'];

switch ($main) {
	case 1:
            $obj= new registro;
            $obj->add_users();
           header('location:..vistas/view_login.html');
		
		break;
        case 2:
            $obje=new login();
            $obje->login_user();
            
		
		break;
	
	default:
		
		break;
}
 

?>

