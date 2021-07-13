<?php
require_once "Conexion.php";

class Consultas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function DatosInstitucion()
	{
		$sql = "SELECT id,nombre_inst,direccion,telefono,RUC,email,p_web,creacion,resolucion,estado FROM institucion;";
		$res = $this->conn->ConsultaArray($sql);
		return $res;	
	}

	function InstitucionArray()
	{
		$sql = "SELECT id,nombre_inst,direccion,telefono,RUC,email,p_web,creacion,resolucion,fecCreate,fecChange FROM institucion;";
		
		$res = $this->conn->ConsultaArray($sql);
		return $res;
	}

	function Gerencias()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla,idinstitucion,fechaActual FROM gerencias;";
		$res = $this->conn->ConsultaCon($sql);
		return $res;

	}

	function Oficinas()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla,idinstitucion,fechaActual FROM gerencias;";
		$res = $this->conn->ConsultaCon($sql);
		return $res;

	}

	function Areas()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla,idinstitucion,fechaActual FROM gerencias;";
		$res = $this->conn->ConsultaCon($sql);
		return $res;

	}

	function Personal()
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