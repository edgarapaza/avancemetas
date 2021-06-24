<?php
require "../core/Conexion.php";

class Metas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre_meta,$programado,$unidad_medida)
	{
		$sql = "INSERT INTO metas VALUES (null,'$nombre_meta','$programado','$unidad_medida');";

		
	}

	public function Modificar($idmeta, $nombre_meta,$programado,$unidad_medida)
	{
		
		$sql = "UPDATE metas SET nombre_meta = '$nombre_meta', programado = '$programado', unidad_medida='$unidad_medida' WHERE id_metas = $idmeta;";

		
	}
	public function Consultar()
	{
		$sql = "SELECT id_metas, nombre_meta, programado, unidad_medida, frecuencia FROM metas;";
		
		$response = $this->conn->ConsultaCon($sql);

		return $response;
		
	}

	public function MostrarMetaOficina($idmeta)
	{
		
		$sql = "SELECT nombre_meta, programado, unidad_medida, frecuencia FROM metas WHERE id_metas = $idmeta;";
		

		return $data;
		
	}

}
