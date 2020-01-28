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

	public function Guardar($id_jefearea,$nombre_cargo,$id_personal,$f_inicio_cargo,$documento)
	{
		$fechaActual = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO cargos VALUES (null,'$id_jefearea','$nombre_cargo','$id_personal','$f_inicio_cargo',null,'$documento');";



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
		
	}

	public function CrearOficinas()
	{
		
	}
}
