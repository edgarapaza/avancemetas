<?php
require_once "Conexion.php";

class Validar
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function Comprobar($user, $pass)
	{
		$sql = "SELECT id_personal,niv_usu,chk_usu FROM login WHERE nom_usu = '$user' AND psw_usu ='$pass';";
		$data = $this->conn->ConsultaArray($sql);
		return $data;
		mysqli_close($this->conn);
	}
}
