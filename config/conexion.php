<?php
/*
*
* CONEXION A LA BASE DE DATOS PRINCIPAL "VOTACIONES"
* 
*/ 
$host="localhost";
$bd="votaciones";
$usuario="root";
$contrasenia="";
/*
*
* CONEXION CREADA PARA GUARDAR LOS DATOS DEL FORMULARIO A LA BASE DE DATOS PRINCIPAL
*
*/

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion) { echo "Conexion establecida..."; }
} catch (Exception $ex) {
    echo $ex->getMessage(); 
}

?>