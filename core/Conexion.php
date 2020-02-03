<?php

class Conexion {

	public function Conectar() {
		#require_once ("config.php");
<<<<<<< HEAD
<<<<<<< HEAD
		$mysqli = new mysqli("localhost","root", "", "bd_institucion");
=======
		$mysqli = new mysqli("localhost","root","", "bd_institucion");
>>>>>>> 93beeda8b3432632b9301cacecf85f827f47c467
=======
		$mysqli = new mysqli("localhost","coraima","A@dmin0215.,$", "bd_institucion");
>>>>>>> 7fa55523b28dbcc98560315e18fa183e40208b8e
		$mysqli->set_charset("utf8");
		
		if ($mysqli->connect_errno) {
			echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
			exit();
		}

		echo $mysqli->host_info. "Dentro de la clase";
		return $mysqli;
	}
}

?>