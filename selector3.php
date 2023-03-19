<?php
/* conexion a la tabla candidatos */

include('./config/conexion.php'); //

$sentenciaSQL=$conexion->prepare("SELECT * FROM candidatos");
$sentenciaSQL->execute();
$candidatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>