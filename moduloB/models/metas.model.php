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

	public function Guardar($nombre,$cantidad,$unidadmedida,$frecuencia,$idpersonal)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "INSERT INTO metas_personal (idmetas, nombre, cantidad, unidadmedida, frecuencia, idpersonal, fecCreate) VALUES (null, '$nombre', '$cantidad', '$unidadmedida', '$frecuencia', '$idpersonal', '$fechaActual');";

		$res = $this->conn->ConsultaSin($sql);
        return $res;
	}

	public function Modificar($idmeta, $nombre,$cantidad,$unidadmedida,$frecuencia)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "UPDATE metas_personal SET nombre = '$nombre', cantidad = '$cantidad', unidadmedida = '$unidadmedida', frecuencia = '$frecuencia', fecCreate = '$fechaActual'WHERE idmetas = $idmeta;";

		$res = $this->conn->ConsultaSin($sql);
        return $res;
	}
	public function Consultar()
	{
		$sql = "SELECT idmetas, nombre, cantidad, unidadmedida, frecuencia, idpersonal, fecCreate FROM  metas_personal;";	

	
		$response = $this->conn->ConsultaCon($sql);
		return $response;
		
	}

	public function MostrarMetaPersonal($idmeta)
	{
		
		$sql = "SELECT idmetas, nombre, cantidad, unidadmedida, frecuencia, idpersonal FROM metas_personal WHERE idmetas = $idmeta;";
		
		$res = $this->conn->ConsultaArray($sql);
        return $res;
	}

}
