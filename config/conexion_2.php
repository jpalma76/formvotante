<?php
/* BASE DE DATOS COMUNAS POR REGIONES */
$host="localhost";
$bd="comunas_por_regiones";
$usuario="root";
$contrasenia="";

try {
    $conexion_2=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage(); 
}

?>