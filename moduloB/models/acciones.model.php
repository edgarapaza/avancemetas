<?php
require_once("Conexion.php");

class Acciones
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($id_personal,$nomb_actividad,$unidad_medida)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "INSERT INTO acciones VALUES (null,'$id_personal','$nomb_actividad','$unidad_medida','$fechaActual','$fechaActual')";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Modificar($id_acciones,$nomb_actividad,$unidad_medida)
	{
		$sql = "UPDATE acciones SET nomb_actividad = '$nomb_actividad', unidad_medida = '$unidad_medida' WHERE id_acciones = $id_acciones;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;	
	}

	public function Consultar()
	{
		$sql = "SELECT id_acciones, id_personal, id_cargos, nomb_actividad, unidad_medida FROM acciones;";

		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

	public function MostrarAcciones($id_acciones)
	{
		$sql = "SELECT id_acciones, id_personal,id_cargos, nomb_actividad, unidad_medida FROM acciones WHERE id_acciones = " . $id_acciones;
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}
	
	public function MostrarAccionesUno($id_acciones)
	{
		$sql = "SELECT id_acciones, id_personal, id_areas, id_cargos, id_personal, nomb_actividad, unidad_medida FROM acciones WHERE id_acciones = " . $id_acciones;
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}
}
