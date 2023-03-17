<?php

include('./config/conexion_3.php');

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM comunas");
$sentenciaSQL->execute();
$comunas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>