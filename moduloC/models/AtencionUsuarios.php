<?php

	class AtencionUsuario{

		private $mysqli;

		function __construct()
		{
			require_once "../coreB/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function Add($dni, $nombre, $tipoAtencion){
			$sql = "INSERT INTO atencionUsuarios (idatencionUsuarios,dni,nombres,tipoAtencion) VALUES (NULL,'$dni','$nombre','$tipoAtencion')";
			$this->mysqli->query($sql);
		}

		public function Duplicado($dni){
			$sql = "SELECT count(idatencionUsuarios) as numero, dni, nombres, tipoAtencion FROM atencionUsuarios WHERE dni = '$dni'";
			$val = $this->mysqli->query($sql);
			$numero = $val->fetch_array();
			return $numero;
		}
	}


 ?>