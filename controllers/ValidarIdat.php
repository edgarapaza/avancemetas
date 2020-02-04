<?php 
session_start();
require "../Core/Conexion.php";
$conn=new Conexion();
$conexion=$conn->Conectar();

$username = $_POST['username'];
$passwd = $_POST['clave'];

printf("Usuario: %s con Contraseña: %s", $username, $passwd);

$sql = "SELECT niv_usu, id_personal FROM login WHERE nom_usu='$username' and psw_usu='$passwd' and chk_usu=1;";

$response=$conexion->query($sql);
$data=$response->fetch_array(MYSQLI_ASSOC);

if ($data['niv_usu'] != null) {
	
 echo $data['niv_usu'];
}else{
	echo "error";
}

switch ($data['niv_usu']) {
	case '1':
		$_SESSION["admin"]=$data["id_personal"];
		header("location: ../moduloA/index.php");
		break;
	case '2':
	    $_SESSION["id_personal"]=$data['id_personal'];
        header("location: ../moduloB/index.php");
	    break;
	
	default:
		# code...
		break;
}
