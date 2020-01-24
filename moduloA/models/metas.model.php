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

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error();
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		
	}

	public function CrearOficinas()
	{
		
	}
}
