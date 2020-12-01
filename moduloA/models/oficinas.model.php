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

	public function Guardar($nomsubgerencia,$sigla,$idgerencia,$id_metas=0)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO oficinas VALUES (null,'$nomsubgerencia','$sigla','$fechaActual','$fechaActual','$id_metas','2','$idgerencia')";

		if(!$this->conn->query($sql)){
			echo "Error guardando: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		mysqli_close($this->conn);
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
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
		}

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
