<?php 
require("../models/oficinas.model.php");

$nombre_of = trim(strtoupper($_POST['nombre_of']));
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficinas();

$oficina->Guardar($nombre_of,$id_metas,$id_institucion);

header("Location: ../index.php");
 /*dfhgfhd*/