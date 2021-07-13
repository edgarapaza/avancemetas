<?php
require_once "Conexion.php";

class Metas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre,$programado,$unidad_medida,$frecuencia)
	{
		$sql = "INSERT INTO metas (id_metas,nombre,programado,unidad_medida,frecuencia) VALUES (null,'$nombre','$programado','$unidad_medida','$frecuencia');";

		$res = $this->conn->ConsultaSin($sql);
        return $res;
	}

	public function Modificar($idmeta, $nombre_meta,$programado,$unidad_medida)
	{
		
		$sql = "UPDATE metas SET nombre_meta = '$nombre_meta', programado = '$programado', unidad_medida='$unidad_medida' WHERE id_metas = $idmeta;";

		$res = $this->conn->ConsultaSin($sql);
        return $res;
	}
	public function Consultar()
	{
		$sql = "SELECT id_metas, nombre, cantidad, unidadmedida, frecuencia, idpersonal FROM metas_personal;";
		
		$response = $this->conn->ConsultaCon($sql);
		return $response;
		
	}

	public function MostrarMetaOficina($idmeta)
	{
		
		$sql =  "SELECT idmetas, nombre, cantidad, unidadmedida, frecuencia, idpersonal FROM metas_personal WHERE idmetas = $idmeta;";
		
		$res = $this->conn->ConsultaArray($sql);
        return $res;
	}

}
