<?php

$host="localhost";
$bd="votaciones";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion) { echo "Conexion establecida..."; }
} catch (Exception $ex) {
    echo $ex->getMessage(); 
}

?>