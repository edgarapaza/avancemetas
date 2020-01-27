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

		$sql = "INSERT INTO datospersonal VALUES (null, '$profesion','$tiempo_servicio' ,'$condicion' ,'$seguro_social' ,'$grupo_sanguineo' ,'$f_ingreso' ,'$f_deceso ')";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_adpersonal, profesion,tiempo_servicio,condicion,seguro_social,grupo_sanguineo,f_ingreso,f_deceso FROM datospersonal;";

		$response = $this->conn->query($sql);

        return $response;
	}

	public function CrearOficinas()
	{
		
	}
}
/*fbdfghfg*/
