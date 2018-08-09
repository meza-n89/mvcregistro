<?php
require 'conexion.php';
class Modelo_admin {
private $dbo;
private $guardar=array(); 
private $guardar_alumno=array();
        function __construct() {
    $this->dbo= Conexion::conexion();
}

public function mostrar_datos(){
    $sql="select * from grado";
    $sentencia= $this->dbo->query($sql);
    
    while ($grados=$sentencia->fetch(PDO::FETCH_ASSOC)){
        $this->guardar[]=$grados;
    }
    return $this->guardar;
}

public function mostrar_alumnos(){
    $sql="select a.nombre as nombre,a.apellido as apellido,b.grado as grado,b.turno as turno from alumno a, grado b, maestro c where b.id_alumno = a.id_alumno";
    //WHERE usuario="'.$usuario.'" and password="'.$password.'"';
    $sentencia= $this->dbo->query($sql);
    
    while ($alumno=$sentencia->fetch(PDO::FETCH_ASSOC)){
        $this->guardar_alumno[]=$alumno;
    }
    return $this->guardar_alumno;
}

}
