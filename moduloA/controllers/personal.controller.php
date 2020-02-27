<?php 
require("../models/personal.model.php");

$nombre = trim(strtoupper($_POST['nombre']));
$apellidos = trim(strtoupper($_POST['apellidos']));
$sexo = $_POST['sexo'];
$telefono = trim(strtoupper($_POST['telefono']));
$fecha_nac = trim(strtoupper($_POST['fecha_nacimiento']));
$email = trim(strtoupper($_POST['email']));
$foto = trim(strtoupper($_POST['foto']));
$dni = trim(strtoupper($_POST['DNI']));

$persona = new Personal();
$persona->Guardar($nombre,$apellidos,$sexo, $telefono,$fecha_nac,$email,$foto,$dni);

header("Location: ../index.php");
