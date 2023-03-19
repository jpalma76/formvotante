<?php
/*
*
* CONEXION A BASE DE DATOS COMUNA_REGION
*
*/

$host="localhost";
$bd="comuna_region";
$usuario="root";
$contrasenia="";

/* CONEXION CREADA PARA OBTENER LOS DATOS DE LOS SELECT DINAMICOS */

try {
    $conexion_2=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage(); 
}

?>