<?php
require_once "Conexion.php";

class Gerencias
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nomgerencia,$sigla, $idinstitucion)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO gerencias VALUES (null,'$nomgerencia','$sigla','$idinstitucion','$fechaActual')";
		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Modificar($idgerencia, $nomgerencia, $sigla)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "UPDATE gerencias SET nomgerencia = '$nomgerencia',sigla = '$sigla' WHERE idgerencia =". $idgerencia;

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Consultar()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla FROM gerencias";
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

}