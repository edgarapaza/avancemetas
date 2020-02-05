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

	public function Guardar($id_personal,$id_responsabilidades,$f_reportes,$cantidad_avance)
	{
		$sql = "INSERT INTO reportes VALUES (null,'$id_personal','$id_responsabilidades','$f_reportes','$cantidad_avance';";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar($id_reportes, $f_reportes,$cantidad_avance)
	{
		$sql = "UPDATE reportes SET f_reportes = '$f_reportes', cantidad_avance = '$cantidad_avance' WHERE id_reportes = $id_reportes;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();		
	}

	public function Consultar()
	{
		$sql = "SELECT id_reportes,$id_personal,id_responsabilidades,f_reportes,cantidad_avance FROM reportes;";

		$response = $this->conn->query($sql);

		return $response;
	}
	public function MostrarReportes($idreportes)
	{
		$sql = "SELECT id_reportes,$id_personal,id_responsabilidades,f_reportes,cantidad_avance  FROM reportes WHERE id_reportes = " . $idreportes;
		
		if(!$response = $this->conn->query($sql))
		{
			"Error: ". mysqli_error($this->conn);
            exit();
		}
		$fila = $response->fetch_array(MYSQLI_ASSOC);
		return $fila;
	}

	public function CrearOficinas()
	{
		
	}
}
