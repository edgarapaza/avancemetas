<?php
	include_once "../models/Tareas.class.php";

	$id_personal = $_REQUEST['id_personal'];
    $id_institucion = $_REQUEST['id_institucion'];
    $id_oficina = $_REQUEST['id_oficina'];
    $id_cargo = $_REQUEST['id_cargo'];
    $actividad = $_REQUEST['actividad'];
    $unidadMedida = $_REQUEST['unidadMedida'];
	$obs = $_REQUEST['obs'];

	echo $id_personal."<br>";
	echo $id_institucion."<br>";
	echo $id_oficina."<br>";
	echo $id_cargo."<br>";
	echo $actividad."<br>";
	echo $unidadMedida."<br>";
	echo $obs."<br>";	

	if (isset($_REQUEST['btnFormulario'])) {
		echo "boton presionado";
		
		$tareas = new Tareas();
		$tareas->AsignarTareas($id_personal, $id_institucion, $id_oficina, $id_cargo, $actividad, $unidadMedida, $obs);
		
	}

	//header("Location: asignarTareas.php?mensaje=Dato Guardado");