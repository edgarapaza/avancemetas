<?php

	class ValidarUsuario
	{

		private $mysqli;

		function __construct()
		{
			require_once "../core/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		function Validar($user, $pass){
			$sql = "SELECT id_personal, idrol, idpermisos FROM login WHERE username = '$user' AND password = '$pass' LIMIT 1;";
			$valor = $this->mysqli->query($sql);
			$data = $valor->fetch_assoc();
			return $data;
		}
	}
 ?>