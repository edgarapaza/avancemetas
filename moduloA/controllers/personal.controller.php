	<?php 
require("../models/personal.model.php");

$nombre = trim(strtoupper($_POST['nombre']));
$pellidos = trim(strtoupper($_POST['apellidos']));
$sexo = trim(strtoupper($_POST['sexo']));
$telefono = trim(strtoupper($_POST['telefono']));
$fecha_nac = trim(strtoupper($_POST['fecha_nac']));
$email = trim(strtoupper($_POST['email']));
$foto = trim(strtoupper($_POST['foto']));
$id_area = trim(strtoupper($_POST['id_areas']));
$_creacion = trim(strtoupper($_POST['f_creacion']));
$id_oficinas = trim(strtoupper($_POST['id']));

$persona = new Personal();
$persona->Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto,$id_area,$_creacion,$id_oficinas);

header("Location: ../index.php");
