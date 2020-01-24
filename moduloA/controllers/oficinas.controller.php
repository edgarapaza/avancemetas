<?php 
require("../models/oficinas.model.php");

$nombre_of = $_POST['nom_oficina'];
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficina();
$oficina->Guardar($nombre_of,$id_metas,$id_institucion);

header("Location: ../index.php");
