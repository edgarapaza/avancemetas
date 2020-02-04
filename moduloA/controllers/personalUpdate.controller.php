<?php 
require("../models/personal.model.php");

$id_personal = trim($_POST['id_personal']);
$nombre = trim(strtoupper($_POST['nombre']));
$apellidos = trim(strtoupper($_POST['apellidos']));
$telefono = trim($_POST['telefono']);
$fecha_nac = trim($_POST['fecha_nac']);
$email = trim(strtolower($_POST['email']));
$dni = trim($_POST['dni']);



$persona = new Personal();
$persona->Modificar($id_personal, $nombre,$apellidos,$telefono,$fecha_nac,$email,$dni);

header("Location: ../index.php");
