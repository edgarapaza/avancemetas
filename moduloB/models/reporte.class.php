<?php
include_once "Conexion.php";
	class Reporte
	{
		private $conn;

		function __construct()
		{
			$link = new Conexion();
			$this->conn = $link->Conectar();
			return $this->conn;
		}

		public function reporteIndividual($codigo){
			$sql="SELECT idpersonal, idactividad, reporte, estado, obs, fecha FROM reportes WHERE idpersonal = $codigo";
			$data = $this->conn->query($sql);
			return $data;
			$this->conn->close();
		}

		public function Insertar($idpersonal, $idactividad, $reporte, $estado, $obs){
			$sql="INSERT INTO reportes (idpersonal, idactividad, reporte, estado, obs) VALUES ('$idpersonal', '$idactividad', '$reporte', '$estado', '$obs')";
			$data = $this->conn->query($sql) or die("Error");
			$this->conn->close();
		}

		public function Duplicado($idpersonal, $idactividad){
			$fecha = date('Y-m-d');
			$sql="SELECT count(idreportes) as numero FROM reportes WHERE idpersonal = $idpersonal AND idactividad = $idactividad AND fecha LIKE '$fecha %'";
			$valor = $this->conn->query($sql);
			$data = $valor->fetch_array(MYSQLI_ASSOC);
			return $data;
			$this->conn->close();
		}

		public function MuestraActividades($codigo){
			$sql = "SELECT idactividad, actividad, unidadMedida FROM actividades WHERE id_personal = $codigo";
			$data = $this->conn->query($sql);
			return $data;
			$this->conn->close();
		}
	}


 ?>