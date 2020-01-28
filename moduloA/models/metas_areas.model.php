<?php
require_once("Conexion.php");

class MetasAreas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_meta,$id_area,$fecha_reporte,$cantidad_avance)
	{
		$sql = "INSERT INTO metas_areas VALUES (null,'$id_meta',id_area','$fecha_reporte','$cantidad_avance')";

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
