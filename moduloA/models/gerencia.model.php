<?php
require_once("Conexion.php");

class Gerencias
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nomgerencia,$sigla, $idinstitucion)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO gerencias VALUES (null,'$nomgerencia','$sigla','$idinstitucion','$fechaActual')";
		echo $sql;

		if(!$this->conn->query($sql)){
			echo "Error guardando: " . mysqli_error();
			exit();
		}
		return true;
		mysqli_close($this->conn);
	}

	public function Modificar($idgerencia, $nomgerencia, $sigla)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "UPDATE gerencias SET nomgerencia = '$nomgerencia',sigla = '$sigla' WHERE idgerencia =". $idgerencia;

		if(!$this->conn->query($sql)){
			echo "Error modificando: " . mysqli_error($this->conn);
			exit();
		}

		mysqli_close($this->conn);
	}

	public function Consultar()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla FROM gerencias";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error consultando: ". mysqli_error($this->conn);
		}

		return $response;
		mysqli_close($this->conn);
	}

}