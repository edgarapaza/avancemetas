<?php
	session_start();
	function ValidarUsuario(){
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		$user_limpio = strtolower(trim($usuario));
		$pass_limpio = strtolower(trim($clave));

		$data = Preguntar($user_limpio,$pass_limpio);

		echo "personal".$data['id_personal']."<br>";
		echo "Rol:".$data['idrol']."<br>";
		echo "Permisos".$data['idpermisos']."<br>";



		if($data['idrol'] > 0){
			switch ($data['idrol']) {
				case 10: #Control Total
					$_SESSION['total'] = $data['id_personal'];
					header("Location: ../moduloA/index.php");
					break;
				case 11: #Administrador de Grupos
					$_SESSION['admin'] = $data['id_personal'];
					header("Location: ../moduloB/index.php");
					break;
				case 12: #Estadisticas
					$_SESSION['estadisticas'] = $data['id_personal'];
					header("Location: ../moduloA/index.php");
					break;
				case 13; #Personal
					$_SESSION['personal'] = $data['id_personal'];
					header("Location: ../moduloB/index.php");
					break;
				default:

					header("Location: ../index.html");
					break;
			}
		}else
		{
			header("Location: ../index.html");
		}

	}

	function Preguntar($usuario, $pass){

		require_once "../models/ValidarUsuario.php";

		$validar = new ValidarUsuario();
		$data = $validar->Validar($usuario,$pass);

		if( $data['id_personal'] > 0)
		{
			$codigo = $data;
		}else{
			$codigo = "No Existe";
			header("Location: ../index.php?error=Usuario no encontrado");
		}

		return  $codigo;
	}

	ValidarUsuario();

?>