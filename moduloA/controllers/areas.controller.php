<?php
require("../models/areas.model.php");

$nombre = trim(strtoupper($_POST['nombre']));
$id_metas = trim($_POST['id_metas']);

$descripcion = trim(strtoupper($_POST['descripcion']));

$areas = new Areas();
$areas->Guardar($nombre,$id_metas,$descripcion);

header("Location: ../index.php");


/*
class Barbie
{
	private $nombre; //variable

	function __construct()
	{
		$this->nombre = "Silvia";
	}

	function Casita()
	{
		echo "Agregando la Casita para Barbie para " . $this->nombre;
	}
}

$barbie = new Barbie();
$barbie->Casita();
*/