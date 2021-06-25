<?php 
require("../models/oficinas.model.php");

$idgerencia = $_POST['idgerencia'];
$nombre     = trim(strtoupper($_POST['nomsubgerencia']));
$sigla      = trim(strtoupper($_POST['sigla']));

$oficina = new Oficinas();

$res = $oficina->Guardar($nombre,$sigla,$idgerencia);

if($res == true)
{
	header("Location: ../index.php?msg=Guardado Correctamente");
}else{
	header("Location: ../index.php?msg=Error");
}
