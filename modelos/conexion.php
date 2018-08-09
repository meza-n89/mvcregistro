<?php
class Conexion{
    function __construct() {
        
    }
    public static function conexion(){
    $conexion= new PDO('mysql:host=localhost;dbname=registro','root','');
    return $conexion;
    
    }
    
    }

?>