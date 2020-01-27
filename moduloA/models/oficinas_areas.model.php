<?php
require_once("Conexion.php");

class Oficinas_Areas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_oficinas,$id_areas)
	{
		$sql = "INSERT INTO oficinas_areas VALUES (null,'$id_oficinas','$id_areas')";

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
		$sql = "SELECT id_ofiarea,id_oficinas,id_areas FROM oficinas_areas; ";

		$response = $this->conn->query($sql);

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}
