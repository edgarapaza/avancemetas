<?php 
require("../models/institucion.model.php");


$nombre_inst = $_POST['nom_institucion'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$RUC = $_POST['RUC'];
$email = $_POST['Email'];
$p_web = $_POST['Pagina_web'];
$fecha_creacion_archivo = $_POST['f_creacion_institucion'];
$id_metas = $_POST['idmetas'];
$n_resolucion = $_POST['N_resolucion'];

$inst = new Institucion();
$inst->Guardar($nombre_inst,$direccion,$telefono,$RUC,$email,$p_web,$fecha_creacion_archivo,$id_metas,$n_resolucion);

header("Location: ../index.php");
