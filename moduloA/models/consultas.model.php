<?php
require "Conexion.php";

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

	}
}

/*$consultas = new Consultas();
$data = $consultas->Gerencias();
while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
	echo $fila['idgerencia'];
	echo $fila['nomgerencia'];
}*/