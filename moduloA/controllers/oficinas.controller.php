<?php 
require("../models/oficinas.model.php");

$idgerencia = $_POST['idgerencia'];
$nombre     = trim(strtoupper($_POST['nomsubgerencia']));
$sigla      = trim(strtoupper($_POST['sigla']));

$oficina = new Oficinas();

$oficina->Guardar($nombre,$sigla,$idgerencia);


