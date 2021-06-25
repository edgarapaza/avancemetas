<?php
require "../models/uniorganica.model.php";

$nombreuo      = trim(strtoupper($_POST['unidadorganica']));
$sigla         = trim(strtoupper($_POST['sigla']));
$idinstitucion = $_POST['idinstitucion'];

$uniorg = new UnidadOrganica();
$res = $uniorg->Guardar($nombreuo,$sigla,$idinstitucion);

if($res == true)
{
	header("Location: ../listaUniorganica.php");
}else{
	header("Location: ../index.php");
}