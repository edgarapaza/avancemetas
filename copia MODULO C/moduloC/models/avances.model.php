<?php
require_once("Conexion.php");

class Reportes
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_personal,$id_responsabilidades,$f_reportes,$cantidad_avance)
	{
		
		$sql = "INSERT INTO reportes VALUES (null,'$id_personal','$id_responsabilidades','$f_reportes','$cantidad_avance');";
	
		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		echo "Guardado Satisfactoriamente";
		
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_reportes, id_personal, id_responsabilidades, f_reportes, cantidad_avance FROM reportes;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error Mostrar Resultados: " . mysqli_error($this->conn);
			exit();
		}

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}