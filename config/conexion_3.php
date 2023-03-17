<?php
/* BASE DE DATOS COMUNAS POR REGIONES */
$host="localhost";
$bd="comuna_region";
$usuario="root";
$contrasenia="";

try {
    $conexion_2=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage(); 
}

?>