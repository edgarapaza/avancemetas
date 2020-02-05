<?php
include("../models/areas.model.php");

$id_areas = $_REQUEST['id_areas'];
$nombre = trim(strtoupper($_REQUEST['nombre']));
$idoficina = trim(strtoupper($_REQUEST['idoficina']));
$descripcion = trim(strtoupper($_REQUEST['descripcion']));

$area = new Areas();
$area->Modificar($id_areas, $nombre, $idoficina, $descripcion);

?>
