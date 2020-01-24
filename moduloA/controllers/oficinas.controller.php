<?php 
require("../models/institucion.model.php");

$nombre_of = $_POST['nom_oficina'];
$f_creacion = $_POST['f_creacion'];
$id_metas = $_POST['idmetas'];
$id_institucion = $_POST['institucion'];

$ofic = new Oficina();
$ofic->Guardar($nombre_of,$f_creacion,$id_metas,$id_institucion);

header("Location: ../index.php");
