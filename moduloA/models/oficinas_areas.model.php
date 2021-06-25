<?php
require_once "Conexion.php";
class Oficinas_Areas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($id_oficinas,$id_areas)
	{
		$sql = "INSERT INTO oficinas_areas VALUES (null,'$id_oficinas','$id_areas')";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_ofiarea,id_oficinas,id_areas FROM oficinas_areas; ";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function CrearOficinas()
	{
		
	}
}
