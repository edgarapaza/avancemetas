<?php

	$idpersonal = $_REQUEST['idpersonal'];
	$idactividad = $_REQUEST['idactividad'];
	$reporte1 = $_REQUEST['reporte'];
	$estado = 1;
	$obs = $_REQUEST['obs'];

	if($reporte1 == NULL){
		header("Location: ../views/index.php?mensaje=Error Guardando");
	}else{
		echo "No vacio";
		include "../models/reporte.class.php";
		$reporte = new Reporte();

		$reporte->Insertar($idpersonal, $idactividad, $reporte1, $estado, $obs);
		header("Location: ../views/index.php?mensaje=Registrado");
	}

 ?>