<?php
require_once("Conexion.php");

class Responsabilidades
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nomb_resp,$f_inicio_respo,$documento,$unidad_medida,$id_personal,$id_jefearea)
	{
		$sql = "INSERT INTO responsabilidades VALUES (null,'$nomb_resp','$f_inicio_respo','$documento','$unidad_medida','$id_personal','$id_jefearea ');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Modificar($id_resp,$nomb_resp,$documento,$unidad_medida)
	{
		$sql = "UPDATE responsabilidades SET nomb_resp = '$nomb_resp', documento = '$documento', unidad_medida = '$unidad_medida' WHERE id_responsabilidades = $id_resp;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;		
	}

	public function Consultar()
	{
		$sql = "SELECT id_responsabilidades,nomb_resp,f_inicio_respo,documento,unidad_medida,id_personal,id_jefearea FROM responsabilidades;";

		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}
	public function MostrarResponsabilidades($id_resp)
	{
		$sql = "SELECT id_responsabilidades,nomb_resp,f_inicio_respo,documento,unidad_medida,id_personal,id_jefearea FROM responsabilidades WHERE id_responsabilidades = " . $id_resp;
		
		$res = $this->conn->ConsultaArray($sql);
		return $res;
	}

	public function CrearOficinas()
	{
		
	}
}
