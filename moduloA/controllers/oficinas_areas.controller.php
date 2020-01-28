<?php 
require("../models/oficinas_areas.model.php");

$id_oficinas = $_POST['id_oficinas'];
$id_areas = $_POST['id_areas'];

$oficinas_areas = new Oficinas_Areas();
$oficinas_areas->Guardar($id_oficinas,$id_areas);

header("Location: ../index.php");
