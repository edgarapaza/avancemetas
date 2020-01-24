<?php 
require("../models/cargos.model.php");

$id_jefearea = $_POST['id_jefearea'];
$nombre_cargo = $_POST['nombre_cargo'];
$id_persona = $_POST['id_persona'];
$f_inicio_cargo = $_POST['f_inicio_cargo'];
$f_fin_cargo = $_POST['f_fin_cargo'];
$documento = $_POST['documento'];

$cargo = new Cargo();
$cargo->Guardar($id_jefearea,$nombre_cargo,$id_persona,$f_inicio_cargo,$f_fin_cargo,$documento);

header("Location: ../index.php");
