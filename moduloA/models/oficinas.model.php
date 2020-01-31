<?php
require_once("Conexion.php");

class Oficinas
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_of,$id_institucion)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO oficinas VALUES (null,'$nombre_of','$fechaActual','$fechaActual','1','$id_institucion')";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error();
			exit();
		}
		return true;
	}

	public function Modificar($idoficina, $nombre_oficina)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "UPDATE oficinas SET nombre_of = '$nombre_oficina', f_update = '$fechaActual' WHERE id = $idoficina;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();
	}

	public function Consultar()
	{
		$sql = "SELECT id, nombre_of, id_metas,id_institucion, f_creacion,f_update FROM oficinas;";
		
		$response = $this->conn->query($sql);

		return $response;
	}

	public function MostrarOficina($idoficina)
	{
		$sql = "SELECT id, nombre_of, id_metas,id_institucion FROM oficinas WHERE id = $idoficina;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo " No se han asignado ninguna meta";
		}
		$fila = $response->fetch_array(MYSQLI_ASSOC);
		return $fila;
	}

	public function CrearOficinas()
	{
		
	}
}
