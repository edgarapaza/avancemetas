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

	public function Guardar($nombre_meta,$programado,$unidad_medida,$frecuencia)
	{
		//$fecCreate = date('Y-m-d');
		//echo $fecCreate;
		$sql = "INSERT INTO metas VALUES (null,'$nombre_meta','$programado','$unidad_medida','$frecuencia');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
		
		/*if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		$this->conn->close();*/
	}

	public function Modificar($idmeta, $nombre_meta,$programado,$unidad_medida)
	{
		
		$sql = "UPDATE metas SET nombre_meta = '$nombre_meta', programado = '$programado', unidad_medida='$unidad_medida' WHERE id_metas = $idmeta;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}
	public function Consultar()
	{
		$sql = "SELECT id_metas,nombre_meta,programado,unidad_medida,frecuencia FROM metas";
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

	public function MostrarMetaOficina($idmeta)
	{
		
		$sql = "SELECT nombre_meta, programado, unidad_medida FROM metas WHERE id_metas = $idmeta;";
		
		$res = $this->conn->ConsultaArray($sql);
		return $res;
	}



	public function CrearOficinas()
	{
		
	}
}