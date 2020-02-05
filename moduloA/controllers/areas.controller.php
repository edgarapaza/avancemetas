<?php
require("../models/areas.model.php");

$idoficina = trim($_POST['iddireccion']);
$nombre = trim(strtoupper($_POST['nombre_area']));
$id_metas = 1;
$descripcion = trim(strtoupper($_POST['descripcion']));

$areas = new Areas();
$areas->Guardar($nombre, $descripcion, $idoficina, $id_metas);

header("Location: ../index.php");