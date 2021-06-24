<?php
require "../core/Conexion.php";

class Consultas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Gerencias()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla,idinstitucion,fechaActual FROM gerencias;";
		$res = $this->conn->ConsultaCon($sql);
		return $res;
		mysqli_close($this->conn);
	}
}