<?php

	function Validar($idpersonal, $idactividad){
		include_once "../models/reporte.class.php";
		$reporte = new Reporte();
		$data = $reporte->Duplicado($idpersonal, $idactividad);

		if($data[0] == 0){
			$rpta = 0;
		}else{
			$rpta = 1;
		}
		return $rpta;
	}

?>