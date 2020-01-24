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

	public function Guardar($nombre_of,$f_creacion,$id_metas,$id_institucion)
	{
		$f_update = date('Y-m-d H:i:s');
		$sql = "INSERT INTO oficinas VALUES (null,'$nombre_of','$f_creacion','$f_update','$id_metas',id_institucion','$f_update')";

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
