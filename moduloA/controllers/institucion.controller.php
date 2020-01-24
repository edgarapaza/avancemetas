<?php 
require("../models/institucion.model.php");

$nombre_inst = trim(strtoupper($_POST['nom_institucion']));
$direccion = trim(strtoupper($_POST['direccion']));
$telefono = trim(strtoupper($_POST['telefono']));
$RUC = trim(strtoupper($_POST['RUC']));
$email = trim(strtolower($_POST['Email']));
$p_web = trim(strtolower($_POST['Pagina_web']));
$fecha_creacion_archivo = trim($_POST['f_creacion_institucion']);
$id_metas = trim($_POST['idmetas']);
$n_resolucion = trim(strtoupper($_POST['N_resolucion']));

$inst = new Institucion();
$inst->Guardar($nombre_inst,$direccion,$telefono,$RUC,$email,$p_web,$fecha_creacion_archivo,$id_metas,$n_resolucion);

header("Location: ../index.php");
