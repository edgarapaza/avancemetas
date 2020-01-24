<?php
require_once("Conexion.php");

class Institucion
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre_inst,$direccion,$telefono,$RUC,$email,$p_web,$fecha_creacion_archivo,$id_metas,$n_resolucion)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO institucion VALUES (null,'$nombre_inst','$direccion','$telefono','$RUC','$email','$p_web','$fecha_creacion_archivo','$fechaActual','$id_metas','$n_resolucion','$fechaActual')";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error();
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		
	}

	public function CrearOficinas()
	{
		
	}
}
