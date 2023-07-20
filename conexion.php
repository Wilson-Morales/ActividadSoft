<?php 

#Conexion con la base de datos

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "actividad1";
$conectaBD = new mysqli($servidor, $usuario, $password, $base_datos);
$conectaBD->set_charset("utf8");

?>