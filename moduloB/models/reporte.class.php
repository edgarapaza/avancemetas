<?php

	class Reporte
	{
		private $mysqli;
		function __construct()
		{
			require_once "../coreB/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function reporteIndividual($codigo){
			$sql="SELECT idpersonal, idactividad, reporte, estado, obs, fecha FROM reportes WHERE idpersonal = $codigo";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function Insertar($idpersonal, $idactividad, $reporte, $estado, $obs){
			$sql="INSERT INTO reportes (idpersonal, idactividad, reporte, estado, obs) VALUES ('$idpersonal', '$idactividad', '$reporte', '$estado', '$obs')";
			$data = $this->mysqli->query($sql);
		}

		public function MuestraActividades($codigo){
			$sql = "SELECT idactividad, actividad, unidadMedida FROM actividades WHERE id_personal = $codigo";
			$data = $this->mysqli->query($sql);
			return $data;
		}
	}


 ?>