<?php
require_once("Conexion.php");

class Oficinas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_of,$id_metas,$id_institucion)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO oficinas VALUES (null,'$nombre_of','$fechaActual','$fechaActual','$id_metas','$id_institucion')";

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
		$sql = "SELECT id, nombre_of, f_creacion,f_update,id_metas,id_institucion FROM oficinas;";
		
		$response = $this->conn->query($sql);

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}
