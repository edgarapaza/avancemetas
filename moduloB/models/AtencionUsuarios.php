<?php

	class AtencionUsuario{

		private $conn;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		public function Add($dni, $nombre, $tipoAtencion){
			$sql = "INSERT INTO atencionUsuarios (idatencionUsuarios,dni,nombres,tipoAtencion) VALUES (NULL,'$dni','$nombre','$tipoAtencion')";

			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}

		public function Duplicado($dni){
			$sql = "SELECT count(idatencionUsuarios) as numero, dni, nombres, tipoAtencion FROM atencionUsuarios WHERE dni = '$dni'";

			$res = $this->conn->ConsultaArray($sql);
			return $res;

			/*
			$val = $this->mysqli->query($sql);
			$numero = $val->fetch_array();
			return $numero;
			*/
		}
	}


 ?>