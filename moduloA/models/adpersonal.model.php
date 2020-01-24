<?php
require_once("Conexion.php");

class AdPersonal
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($profesion,$tiempo_servicio,$condicion,$seguro_social,$grupo_sanguineo,$f_ingreso,$f_deceso)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO datospersonal (id_adpersonal,profesion,tiempo_servicio,condicion,seguro_social,grupo_sanguineo,f_ingreso,f_deceso)
		VALUES (null, '$id_adpersonal' ,'$profesion','$tiempo_servicio' ,'$condicion' ,'$seguro_social' ,'$grupo_sanguineo' ,'$f_ingreso' ,'$f_deceso ')";


		if(!$this->conn->query($sql)){
			echo "Error: " . error_reporting(E_ALL);
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
