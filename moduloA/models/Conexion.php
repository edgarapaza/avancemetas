<?php 

class Conexion
{
	public function Conectar()
	{
		$mysqli = new mysqli('localhost','root', '','bd_institucion');
		//echo $mysqli->host_info;
		return $mysqli;
	}

}
?>