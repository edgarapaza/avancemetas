<?php
require_once("Conexion.php");

class Cargo
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_cargo,$id_persona,$f_inicio_cargo,$f_fin_cargo,$documento)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO cargos VALUES(null,'$nombre_cargo','$id_personal','$f_inicio_cargo','$f_fin_cargo','$documento')";

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
