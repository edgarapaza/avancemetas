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

	public function Modificar($id_resp,$nomb_resp,$documento,$unidad_medida)
	{
		$sql = "UPDATE responsabilidades SET nomb_resp = '$nomb_resp', documento = '$documento', unidad_medida = '$unidad_medida' WHERE id_responsabilidades = $id_resp;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();		
	}

	public function Consultar()
	{
		$sql = "SELECT id_responsabilidades,nomb_resp,f_inicio_respo,documento,unidad_medida,id_personal,id_jefearea FROM responsabilidades;";

		$response = $this->conn->query($sql);

		return $response;
	}
	public function MostrarResponsabilidades($id_resp)
	{
		$sql = "SELECT id_responsabilidades,nomb_resp,f_inicio_respo,documento,unidad_medida,id_personal,id_jefearea FROM responsabilidades WHERE id_responsabilidades = " . $id_resp;
		
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
