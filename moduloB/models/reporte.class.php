<?php

	class Reporte
	{
		private $mysqli;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		public function reporteIndividual($codigo){
			$sql="SELECT idpersonal, idactividad, reporte, estado, obs, fecha FROM reportes WHERE idpersonal = $codigo";
			
			$res = $this->conn->ConsultaCon($sql);
			return $res;
		}

		public function Insertar($idpersonal, $idactividad, $reporte, $estado, $obs){
			$sql="INSERT INTO reportes (idpersonal, idactividad, reporte, estado, obs) VALUES ('$idpersonal', '$idactividad', '$reporte', '$estado', '$obs')";
			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}

		public function Duplicado($idpersonal, $idactividad){
			$fecha = date('Y-m-d');
			$sql="SELECT count(idreportes) as numero FROM reportes WHERE idpersonal = $idpersonal AND idactividad = $idactividad AND fecha LIKE '$fecha %'";

			$res = $this->conn->ConsultaArray($sql);
			return $res;
		}

		public function MuestraActividades($codigo){
			$sql = "SELECT idactividad, actividad, unidadMedida FROM actividades WHERE id_personal = $codigo";
			$res = $this->conn->ConsultaCon($sql);
			return $res;
		}
	}


 ?>