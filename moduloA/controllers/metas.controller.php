<?php 
require "../models/metas.model.php";

$nombre        = trim(strtoupper($_POST['nombre_meta']));
$programado    = trim(strtoupper($_POST['programado']));
$unidad_medida = trim(strtoupper($_POST['unidad_medida']));
$frecuencia    = trim(strtoupper($_POST['frecuencia']));

$meta = new Metas();
$meta->Guardar($nombre,$programado,$unidad_medida,$frecuencia);

header("Location: ../index.php");