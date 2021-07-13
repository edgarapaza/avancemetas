<?php
require_once "Conexion.php";

class UnidadOrganica
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Guardar($nombreuo,$sigla,$idinstitucion)
	{
		

		
		$sql = "INSERT INTO unidadorganica (iduorg,nombreuo,sigla,idinstitucion) VALUES (null,'$nombreuo','$sigla','$idinstitucion')";
	
		$res = $this->conn->ConsultaSin($sql);
        return $res;
		
	}

	function Listado()
	{
		$sql = "SELECT iduorg,nombreuo,sigla FROM unidadorganica";
	
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}
}