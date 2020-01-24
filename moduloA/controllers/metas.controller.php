<?php 
require("../models/metas.models.php");
$nombre_meta = $_POST['nom_metas'];
$programado = $_POST['programado'];
$unidad_medida = $_POST['unidad_medida'];

$meta = new Metas();
$meta->Guardar($nombre_meta,$programado,$unidad_medida);

header("Location: ../index.php");
