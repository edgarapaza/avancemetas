<?php
include("../models/responsabilidades.model.php");

$id_resp = $_REQUEST['id_resp'];
$nomb_resp = trim(strtoupper($_REQUEST['nomb_resp']));
$documento = trim(strtoupper($_REQUEST['documento']));
$unidad_medida = trim(strtoupper($_REQUEST['unidad_medida']));

$responsabilidades = new Responsabilidades();
$responsabilidades->Modificar($id_resp, $nomb_resp, $documento, $unidad_medida);
