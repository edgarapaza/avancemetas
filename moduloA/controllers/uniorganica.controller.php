<?php
require "../models/uniorganica.model.php";

$nombreuo      = trim(strtoupper($_POST['unidadorganica']));
$sigla         = trim(strtoupper($_POST['sigla']));
$idinstitucion = $_POST['idinstitucion'];

$uniorg = new UnidadOrganica();
$res = $uniorg->Guardar($nombreuo,$sigla,$idinstitucion);

if($res == true)
{
	header("Location: ../uniorganica.php?msg=Agregado correctamente");
}else{
	header("Location: ../index.php?msg=Error guardando");
}