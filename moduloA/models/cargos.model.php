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

		$this->conn->close();
	}

	public function Modificar($idcargos,$nombre_cargo,$documento)
	{
		$sql = "UPDATE cargos SET nombre_cargo = '$nombre_cargo', documento = '$documento' WHERE id_cargos = '$idcargos';";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();
	}

	public function Consultar()
	{
		$sql = "SELECT id_cargos, nombre_cargo, f_inicio_cargo, f_fin_cargo, documento FROM cargos;";
		
		$response = $this->conn->query($sql);

		return $response;

		$this->conn->close();
	}

	public function MostrarCargos($idcargos)
	{
		$sql = "SELECT id_cargos, nombre_cargo, f_inicio_cargo,f_fin_cargo,documento FROM cargos WHERE id_cargos = $idcargos;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo " No se han asignado ningun cargo";
		}
		
		$fila = $response->fetch_array(MYSQLI_ASSOC);
		return $fila;

		$this->conn->close();
	}
}
