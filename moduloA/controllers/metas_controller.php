<?php 
require("../models/metas.model.php");

$nombre_meta = $_POST['nombre_meta'];
$programado = $_POST['programado'];
$unidad_medida = $_POST['unidad_medida'];

$meta = new Metas();
$meta->Guardar($nombre_meta,$programado,$unidad_medida);

header("Location: ../index.php");

