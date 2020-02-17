<?php
require_once("Conexion.php");

class Reportes
{
	private $conn;

	function __construct()
	{
		$link = new Conexionnn();
		$this->conn = $link->Conectar();
		return $this->conn;
	}


	public function Guardar($id_personal, $id_acciones, $cantidad)
	{
		$fecha = date('Y-m-d H:i:s');
		$sql = "INSERT INTO reportes (id_reportes, id_personal, id_acciones, f_reportes, cantidad) VALUES (null, '$id_personal', '$id_acciones', '$fecha', '$cantidad');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		echo "Guardado correctamente";
	
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

	public function Consultar($idpersonal)
	{
		$sql = "";

		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
		}

		$data = $response->fetch_array(MYSQLI_ASSOC);

		return $data;
	}
	public function MostrarReportes($idpersonal)
	{
		$sql = "SELECT id_acciones, nomb_actividad, unidad_medida FROM acciones WHERE id_personal = $idpersonal;";
		
		if(!$response = $this->conn->query($sql))
		{
			"Error: ". mysqli_error($this->conn);
            exit();
		}

		return $response;
	}
	/*public function Consultarcant($cantidad)
	{
		$sql = "SELECT cantidad from reportes WHERE cantidad=$cantidad;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		


		return $data1;
	}*/
}
