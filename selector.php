<?php

$txtRegion=(isset($_POST['txtRegion']))?$_POST['txtRegion']:"";
$txtComuna=(isset($_POST['txtComuna']))?$_POST['txtComuna']:"";
$txtCandidato=(isset($_POST['txtCandidato']))?$_POST['txtCandidato']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include('./config/conexion_2.php');

switch($accion) {
    case 'votar':
        include('./config/conexion.php');
        $sentenciaSQL=$conexion->prepare("INSERT INTO votantes (region_votante,comuna_votante) VALUES (:regionVotante,:comunaVotante)");
        $sentenciaSQL->bindParam(':regionVotante',$txtRegion);
        $sentenciaSQL->bindParam(':comunaVotante',$txtComuna);
        $sentenciaSQL->execute();
        break;
}

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM regiones");
$sentenciaSQL->execute();
$regiones=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM comunas");
$sentenciaSQL->execute();
$comunas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL=$conexion_2->prepare("SELECT * FROM provincias");
$sentenciaSQL->execute();
$provincias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selectores</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<div class="container">



    <div class="col-md-5">

        <form action="" method="post">

            <div class="div-region">
                <div class="form-group">
                    <label for="txtRegion">Region</label>
                    <select class="form-control" name="txtRegion" id="txtRegion">
                        <?php forEach($regiones as $region) { ?>
                            <option value="<?php $region['id']; ?>">
                                <?php echo $region['region']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="class-comuna">
                <div class="form-group">
                    <label for="txtComuna">Comunas</label>
                    <select class="form-control" name="txtComuna" id="txtComuna">
                        <?php forEach($comunas as $comuna) { ?>
                            <option value="<?php $comuna['id']; ?>">
                                <?php echo $comuna['comuna']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <br>
            <div class="votar">
                <button type="submit" name="accion" value="votar">Votar</button>
            </div>
        </form>

    </div>
    
    <div class="col-md-5">
    </div>

</div>


</body>
</html>
