<?php
require_once("Conexion.php");

class Reportes
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
        return $this->conn;
	}


	public function Guardar($id_personal, $id_acciones, $cantidad)
	{
		$fecha = date('Y-m-d H:i:s');
		$sql = "INSERT INTO reportes (id_reportes, id_personal, id_acciones, f_reportes, cantidad) VALUES (null, '$id_personal', '$id_acciones', '$fecha', '$cantidad');";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	
	}

	public function Modificar($idreportes, $cantidad)
	{
		$sql = "UPDATE reportes SET cantidad = '$cantidad' WHERE id_reportes = $idreportes;";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}

	public function Consultar()
	{
		$sql = "SELECT id_reportes,id_personal,id_acciones,f_reportes,cantidad FROM reportes WHERE id_personal = 3;";

		$res = $this->conn->ConsultaCon($sql);
		return $res;
	
	}
	public function MostrarReportes($idpersonal)
	{
		$sql = "SELECT id_acciones, nomb_actividad, unidad_medida FROM acciones WHERE id_personal = $idpersonal;";
		
		$res = $this->conn->ConsultaCon($sql);
		return $res;
	}

	public function MostrarPersonalUno($idpersonal)
	{
				
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,f_creacion,DNI FROM personal WHERE id_personal = 3";


		$res = $this->conn->ConsultaArray($sql);
		return $res;

	}
}
