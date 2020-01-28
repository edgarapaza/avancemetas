<?php 
require("../models/metas_areas.models.php");

$id_meta = $_POST['idmetas'];
$id_area = $_POST['idareas'];
$fecha_reporte = $_POST['fecha_reporte'];
$cantidad_avance = $_POST['cantidad_avance'];


$metaarea = new MetasAreas();
$metaarea->Guardar($id_meta,$id_area,$fecha_reporte,$cantidad_avance);

header("Location: ../index.php");
