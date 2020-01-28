<?php
require_once("Conexion.php");

class Responsabilidades
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
		$sql = "INSERT INTO responsabilidades VALUES (null,'$nomb_resp','$f_inicio_respo','$documento','$unidad_medida','$id_personal','$id_jefearea ');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_responsabilidades,nomb_resp,f_inicio_respo,documento,unidad_medida,id_personal,id_jefearea FROM responsabilidades;";

		$response = $this->conn->query($sql);

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}
