<?php
require_once ("../modelos/Modelo_admin.php");
require_once ("../vistas/admin.php");

$objeto= new Modelo_admin();
$obje=$objeto->mostrar_datos();

$objeto_alumno=$objeto->mostrar_alumnos();