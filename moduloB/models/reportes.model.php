<?php
require_once("Conexion.php");

class Reportes
{
	private $conn;

	function __construct()
	{
		$link = new Conexionn();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($cantidad,$id_personal,$id_acciones,$f_reportes)
	{
		$sql = "INSERT INTO reportes VALUES (null,'$cantidad',$id_personal','$id_acciones','$f_reportes');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar($idreportes, $cantidad)
	{
		$sql = "UPDATE reportes SET cantidad = '$cantidad' WHERE id_reportes = $idreportes;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();
	}

	public function Consultar()
	{
		$sql = "SELECT id_reportes,id_personal,id_acciones,f_reportes,cantidad FROM reportes;";

		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
		}

		return $response;
	}
	public function MostrarReportes($idreportes)
	{
		$sql = "SELECT id_reportes,id_personal,id_acciones,f_reportes,cantidad  FROM reportes WHERE id_reportes = " . $idreportes;
		
		if(!$response = $this->conn->query($sql))
		{
			"Error: ". mysqli_error($this->conn);
            exit();
		}
		$fila = $response->fetch_array(MYSQLI_ASSOC);
		return $fila;
	}

}