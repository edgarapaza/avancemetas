<?php
require_once("Conexion.php");

class Metas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_meta,$programado,$unidad_medida)
	{
		$sql = "INSERT INTO metas VALUES (null,'$nombre_meta','$programado','$unidad_medida');";

		
		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		$this->conn->close();
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_metas, nombre_meta, programado, unidad_medida FROM metas;";
		
		$response = $this->conn->query($sql);

		return $response;
		$this->conn->close();
	}

	public function MostrarMetaOficina($idmeta)
	{
		
		$sql = "SELECT nombre_meta, programado, unidad_medida FROM metas WHERE id_metas = $idmeta;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}
		$data = $response->fetch_array(MYSQLI_ASSOC);

		return $data;
		$this->conn->close();
	}

	public function CrearOficinas()
	{
		
	}
}