<?php 
require("../models/cargos.model.php");

$id_jefearea = $_POST['id_jefearea'];
$nombre_cargo = $_POST['nombre_cargo'];
$id_personal = $_POST['id_personal'];
$f_inicio_cargo = $_POST['f_inicio_cargo'];	
$f_fin_cargo = null;
$documento = $_POST['documento'];

$cargo = new Cargo();
$cargo->Guardar($id_jefearea,$nombre_cargo,$id_personal,$f_inicio_cargo,$documento);

header("Location: ../index.php");
