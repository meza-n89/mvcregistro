<?php
class Conexion{
    function __construct() {
        
    }
    public static function conexion(){
    $conexion= new PDO('mysql:host=localhost;dbname=registro_notas','root','');
    return $conexion;
    
    }
    
    }

?>