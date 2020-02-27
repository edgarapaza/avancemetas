<?php 
require("../models/cargos.model.php");

$idoficina = trim(strtoupper($_POST['idoficina']));
$nombre_cargo = trim(strtoupper($_POST['nombre_cargo']));
$idarea = trim(strtoupper($_POST['idarea']));
$idpersonal = trim(strtoupper($_POST['idpersonal']));


$cargo = new Cargo();
$cargo->Guardar($idoficina,$nombre_cargo,$idarea,$idpersonal);

header("Location: ../../ModuloA/index.php");
