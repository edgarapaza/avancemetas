<?php
include("../models/areas.model.php");

$id_areas = $_REQUEST['id_areas'];
$nombre = trim(strtoupper($_REQUEST['nombre']));
$id_metas = trim(strtoupper($_REQUEST['id_metas']));
$descripcion = trim(strtoupper($_REQUEST['descripcion']));

$area = new Areas();
$area->Modificar($id_areas, $nombre, $id_metas, $descripcion);

