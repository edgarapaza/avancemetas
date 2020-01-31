<?php
include("../models/oficinas.model.php");

$idoficina = $_REQUEST['idoficina'];
$nombre_oficina = trim(strtoupper($_REQUEST['nombre_of']));

$oficina = new Oficinas();
$oficina->Modificar($idoficina, $nombre_oficina);

//header('Location: ../oficinasCambiar.php');