<?php
require_once("Conexion.php");

class OficinasAreas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($id_oficinas,$id_areas)
	{
		$sql = "INSERT INTO oficinas_areas VALUES (null,'$id_oficinas','$id_areas)";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
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
