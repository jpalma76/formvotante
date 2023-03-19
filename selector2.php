<?php
/* conexion a la tabla comunas */

include('./config/conexion_2.php'); //

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM comunas");
$sentenciaSQL->execute();
$comunas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>