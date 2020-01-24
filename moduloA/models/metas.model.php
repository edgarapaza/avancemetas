<?php
require_once("Conexion.php");

class Metas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_meta,$programado,$unidad_medida)
	{
		$sql = "INSERT INTO metas VALUES (null,'$nombre_meta','$programado','$unidad_medida')";

		
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_metas, nombre_meta, programado, unidad_medida FROM metas;";
		
		$response = $this->conn->query($sql);

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}