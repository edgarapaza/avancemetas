<?php 
session_start();
require "../models/ValidarUsuario.php";

$user = $_POST['txtuser'];
$pass = $_POST['txtpass'];

$validar = new Validar();
$data = $validar->Comprobar($user, $pass);

if($data['chk_usu'] == 1)
{

	if ($data['niv_usu'] != null) {
		
		 //echo $data['niv_usu'];
		 switch ($data['niv_usu']) {
			case '1':
				$_SESSION["administrator"]=$data['id_personal'];
				header("location: ../moduloA/index.php");
				break;
			case '2':
			    $_SESSION["id_personal"]=$data['id_personal'];
		        header("location: ../moduloB/index.php");
			    break;
			case '3':
			    $_SESSION["personal"]=$data['id_personal'];
		        header("location: ../moduloC/index.php");
			    break;
		}
	}else{
		echo "error";
		header("Location: ../index.html");
	}
}else{
	header("Location: ../login.html");
}
