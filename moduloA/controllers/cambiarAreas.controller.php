<?php
include("../models/areas.model.php");

$id_areas = $_REQUEST['id_areas'];
$nombre = trim(strtoupper($_REQUEST['nombre']));
$descripcion = trim(strtoupper($_REQUEST['descripcion']));

$area = new Areas();
$area->Modificar($id_areas, $nombre, $descripcion );

