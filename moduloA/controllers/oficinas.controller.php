<?php 
require("../models/oficinas.model.php");

<<<<<<< HEAD
$nombre_of = $_POST['nom_oficina'];
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficina();
=======
$nombre_of = trim(strtoupper($_POST['nombre_of']));
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficinas();
>>>>>>> f84703a6e0f5e7444a59b6036b2d42158dafa637
$oficina->Guardar($nombre_of,$id_metas,$id_institucion);

header("Location: ../index.php");
