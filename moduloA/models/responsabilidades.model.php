<?php
require_once("Conexion.php");

class Responabilidades
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nomb_resp,$f_inicio_respo,$documento,$unidad_medida,$id_personal,$id_jefearea)
	{
		$sql = "INSERT INTO resposabilidaddes VALUES (null,$nomb_resp,$f_inicio_respo,$documento,$unidad_medida,$id_personal,$id_jefearea ')";

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
