<?php 
require("../models/cargos.model.php");

$idoficina = trim(strtoupper($_POST['idoficina']));
$nombre_cargo = trim(strtoupper($_POST['nombre_cargo']));

$cargo = new Cargo();
$cargo->Guardar($idoficina,$nombre_cargo);

header("Location: ../../ModuloA/index.php");
