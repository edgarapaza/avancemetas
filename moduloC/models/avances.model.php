<?php
require("Conexion.php");

class Reportes
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($d_personal,$id_responsabilidades,$f_reportes ,$cantidad_avance)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO reportes VALUES (null,'$id_personal,$id_responsabilidades,$f_reportes,$cantidad_avance)";
	
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

