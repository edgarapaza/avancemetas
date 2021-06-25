<?php
require_once "../models/Actividades.class.php";

$id_personal    = $_REQUEST['id_personal'];
$id_institucion = $_REQUEST['id_institucion'];
$id_oficina     = $_REQUEST['id_oficina'];
$id_cargo       = $_REQUEST['id_cargo'];
$actividad      = $_REQUEST['actividad'];
$unidadMedida   = $_REQUEST['unidadMedida'];
$obs            = $_REQUEST['obs'];


$actividades = new Actividades();
$res = $actividades->CrearTarea($id_personal,$id_institucion,$id_oficina,$id_cargo,$actividad,$unidadMedida,$obs);

if($res==true)
{
	header("Location: ../asignarTareas.php?mensaje=Dato Guardado");	
}else{
	header("Location: ../asignarTareas.php?mensaje=Error guardando");
}
