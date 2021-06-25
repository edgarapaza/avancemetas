<?php
require_once "Conexion.php";

class AdPersonal
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($profesion,$tiempo_servicio,$condicion,$seguro_social,$grupo_sanguineo,$f_ingreso,$f_deceso)
	{

		$sql = "INSERT INTO datospersonal VALUES (null, '$profesion','$tiempo_servicio' ,'$condicion' ,'$seguro_social' ,'$grupo_sanguineo' ,'$f_ingreso' ,'$f_deceso ');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_adpersonal, profesion,tiempo_servicio,condicion,seguro_social,grupo_sanguineo,f_ingreso,f_deceso FROM datospersonal;";

		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

	public function CrearOficinas()
	{
		
	}
}