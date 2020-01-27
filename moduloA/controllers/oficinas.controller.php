<?php 
require("../models/oficinas.model.php");

<<<<<<< HEAD
$nombre_of = trim(strtoupper($_POST['nombre_of']));
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficinas();

$oficina->Guardar($nombre_of,$id_metas,$id_institucion);
=======
$nombre_of = $_POST['nom_oficina'];
$id_metas = $_POST['id_metas'];
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficina();
>>>>>>> 4d0bfcc5e1c4251cdd840840bda1dcc75cb1b9c7

header("Location: ../index.php");
 /*dfhgfhd*/