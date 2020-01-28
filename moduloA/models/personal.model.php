<?php
require_once("Conexion.php");

class Personal
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto,$id_area, $id_oficinas)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "INSERT INTO personal VALUES (null,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','null','$id_area','$fechaActual','$fechaActual','$id_oficinas');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,id_area,f_creacion,id_oficinas FROM personal";
		//$sql ="SELECT * FROM personal";

		if(!$response = $this->conn->query($sql)){
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}

		return $response;
	}

	public function CrearOficinas()
	{
		
	}
}


