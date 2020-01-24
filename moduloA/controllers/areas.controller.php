<?php
include "../Models/areas.model.php";

$areas = new Areas();
$data = $areas->Consultar();

while ($fila = $data->fetch_array()) {
	echo $fila[0];
	echo $fila[1];
	echo $fila[2];
}

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