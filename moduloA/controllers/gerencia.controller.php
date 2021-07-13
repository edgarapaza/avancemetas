<?php 
require("../models/gerencia.model.php");

$nomgerencia    = trim(strtoupper($_POST['nombre_gerencia']));
$sigla          = trim(strtoupper($_POST['sigla']));
$unidadorganica = $_POST['uniorganica'];

$gerencias = new Gerencias();
$res = $gerencias->Guardar($nomgerencia,$sigla,$unidadorganica);


if ($res == 1) {
	
	echo $message = "<div class='alert alert-info alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> <strong>Datos guardados con exito!</strong> Puede seguir ingresando nuevas gerencias.
		</div>";
	
}
if ($res == 0){
	echo $message = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> <strong>ERROR!</strong> Consulte con el administrador del sistema e informe del error.
		</div>";	
}
if($res === "Duplicado")
{
	echo $message = "<div class='alert alert-warning alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> <strong>DUPLICADO</strong> Ya existen los datos ingresados en el sistema.
		</div>";
}