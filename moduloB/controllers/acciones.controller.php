<?php 
require("../models/acciones.model.php");

$id_oficina = $_POST['id_oficina'];
$id_areas = $_POST['id_areas'];
$id_cargos = $_POST['id_cargos'];
$id_personal = $_POST['id_personal'];
$nomb_actividad = $_POST['nomb_actividad'];
$unidad_medida = $_POST['unidad_medida'];

$acciones= new Acciones();
$acciones->Guardar($id_oficina,$id_areas,$id_cargos,$id_personal,$nomb_actividad,$unidad_medida);
header("Location: ../index.php");


