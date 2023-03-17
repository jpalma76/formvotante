<?php

$txtRegion=(isset($_POST['txtRegion']))?$_POST['txtRegion']:"";
$txtComuna=(isset($_POST['txtComuna']))?$_POST['txtComuna']:"";
$txtCandidato=(isset($_POST['txtCandidato']))?$_POST['txtCandidato']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include('./config/conexion_2.php');

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM regiones");
$sentenciaSQL->execute();
$regiones=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM provincias");
$sentenciaSQL->execute();
$provincias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM comunas");
$sentenciaSQL->execute();
$comunas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>