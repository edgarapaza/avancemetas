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

	function Guardar($nomgerencia,$sigla, $unidadorganica)
	{
		$sqld = "SELECT idgerencia FROM gerencias WHERE nomgerencia = '$nomgerencia' AND sigla = '$sigla' AND iduorg = '$unidadorganica';";
		$res = $this->conn->ConsultaCon($sqld);
		$num = $res->num_rows;

		if($num >0)
		{
			return "Duplicado";
		}else{
			
			$fechaActual = date('Y-m-d H:i:s');
			$sql = "INSERT INTO gerencias VALUES (null,'$nomgerencia','$sigla','$unidadorganica','$fechaActual')";
			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}
	}

	function Modificar($idgerencia, $nomgerencia, $sigla)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "UPDATE gerencias SET nomgerencia = '$nomgerencia',sigla = '$sigla' WHERE idgerencia =". $idgerencia;

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	function Consultar()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla FROM gerencias";
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

}

$gerencia = new Gerencias();
$gerencia->Guardar('direccion de archivo','direccion','1');