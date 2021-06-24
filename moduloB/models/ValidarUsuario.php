<?php

	class ValidarUsuario
	{

		private $mysqli;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		function Validar($user, $pass){
			$sql = "SELECT id_personal, idrol, idpermisos FROM login WHERE username = '$user' AND password = '$pass' LIMIT 1;";
			$res = $this->conn->ConsultaCon($sql);
			$data = $res->fetch_assoc();
			return $data;
		}
	}
 ?>