<?php 
require("../models/responsabilidades.model.php");

$nomb_resp = $_POST['nomb_resp'];
$f_inicio_respo = $_POST['f_inicio_respo'];
$documento  = $_POST['documento'];
$unidad_medida = $_POST['unidad_medida'];
$id_personal = $_POST['id_personal'];
$id_jefearea = $_POST['id_jefearea'];

$responsabilidades= new Resposabilidades();
$responsabilidades->Guardar($id_oficinas,$id_areas);
header("Location: ../index.php");


