<?php
require_once "Conexion.php";

class Oficinas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre,$sigla,$idgerencia,$id_metas=1)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO oficinas (id,nombre,sigla,f_creacion,f_update,id_metas,id_gerencia) VALUES (null,'$nombre','$sigla','$fechaActual','$fechaActual','$id_metas','$idgerencia');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Modificar($idoficina, $nombre_oficina)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "UPDATE oficinas SET nombre = '$nombre_oficina', f_update = '$fechaActual' WHERE id = $idoficina;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Consultar()
	{
		$sql = "SELECT id, nombre, id_metas,id_gerencia FROM oficinas;";
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
		
	}

	public function MostrarOficina($idoficina)
	{
		$sql = "SELECT id, nombre, id_metas,id_gerencia FROM oficinas WHERE id = $idoficina;";
		
		$res = $this->conn->ConsultaArray($sql);
		return $res;
	}

	public function CrearOficinas()
	{
		
	}
}
