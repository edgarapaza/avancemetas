<?php
require_once("Conexion.php");

class Metas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre,$programado,$unidad_medida,$frecuencia)
	{
		//$fecCreate = date('Y-m-d');
		//echo $fecCreate;
		$sql = "INSERT INTO metas VALUES (null,'$nombre','$programado','$unidad_medida','$frecuencia');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
		
		/*if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		$this->conn->close();*/
	}

	public function Modificar($idmeta, $nombre,$programado,$unidad_medida)
	{
		
		$sql = "UPDATE metas SET nombre = '$nombre', programado = '$programado', unidad_medida='$unidad_medida' WHERE id_metas = $idmeta;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}
	public function Consultar()
	{
		$sql = "SELECT id_metas,nombre,programado,unidad_medida,frecuencia FROM metas";
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

	public function MostrarMetaOficina($idmeta)
	{
		
		$sql = "SELECT nombre, programado, unidad_medida FROM metas WHERE id_metas = $idmeta;";
		
		$res = $this->conn->ConsultaArray($sql);
		return $res;
	}



	public function CrearOficinas()
	{
		
	}
}