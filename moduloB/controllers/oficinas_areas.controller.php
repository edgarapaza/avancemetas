<?php 
require("../models/oficinas_areas.models.php");

$id_oficinas = $_POST["id_oficina"];
$id_areas = $_POST["id_area"];

$ofareas = new OficinasAreas();
$ofareas->Guardar($id_oficinas,$id_areas);

header("Location: ../index.php");
