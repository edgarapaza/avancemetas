<?php 
require("../models/acciones.model.php");

$id_personal = $_POST['id_personal'];
$id_cargos = $_POST['id_cargos'];
$nomb_actividad = $_POST['nomb_actividad'];
$unidad_medida = $_POST['unidad_medida'];

$acciones= new Acciones();
$acciones->Guardar($id_personal,$id_cargos,$nomb_actividad,$unidad_medida);
header("Location: ../index.php");


