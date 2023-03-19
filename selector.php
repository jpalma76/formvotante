<?php
/* conexion a la tabla regiones */

include('./config/conexion_2.php'); //

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM regiones");
$sentenciaSQL->execute();
$regiones=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>