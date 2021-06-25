<?php
require_once "Conexion.php";

class MetasAreas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($id_meta,$id_area,$fecha_reporte,$cantidad_avance)
	{
		$sql = "INSERT INTO metas_areas VALUES (null,'$id_meta',id_area','$fecha_reporte','$cantidad_avance')";

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
