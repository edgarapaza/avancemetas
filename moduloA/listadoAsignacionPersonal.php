<?php
require("models/asignacionPersonal.model.php");
require("models/oficinas.model.php");
require("models/areas.model.php");
require("models/cargos.model.php");
require("models/personal.model.php");

$asignacion = new AsignacionPersonal();

$oficinas = new Oficinas();
$areas    = new Areas();
$cargos   = new Cargo();
$personal = new Personal();

$dataAsignacion = $asignacion->MostrarTodo();

$i=1;
?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div class="container">
	<h1>LISTADO DE ASIGNACION DE PERSONAL</h1>
	
	<table class="table">
		<thead>
			<tr>
				<th>Num</th>
				<th>Direccion</th>
				<th>Area</th>
				<th>Cargo</th>
				<th>Nombre Personal</th>
				<th>Opc.</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($fila = $dataAsignacion->fetch_array(MYSQLI_ASSOC)) {   
			?>
			<tr>
				<td>
					<?php echo $i; ?>
				</td>
				<td>
					<?php 
					$dataOficina  = $oficinas->MostrarOficina($fila['idoficina']);
					echo $dataOficina['nombre_of']; 
					?>
				</td>
				<td>
					<?php
					$dataAreas    = $areas->MostrarArea($fila['idarea']);
					echo $dataAreas['nombre'];
					?>
				</td>
				<td>
					<?php
					$dataCargos   = $cargos->MostrarCargos($fila['idcargo']);
					echo $dataCargos['nombre_cargo']; 
					?>
				</td>
				<td>
					<?php 
					$dataPersonal = $personal->MostrarPersonalUno($fila['idpersonal']);
					echo $dataPersonal['nombre']." ".$dataPersonal['apellidos']; 
					?>
				</td>
				<td>
					<a href="#" id="#cambiarOficina" class="btn btn-info btn-sm" onclick="CambiarDatosOficina(<?php echo $fila['id'];?>)">Cambiar</a>
					<a href="#" >Cambiar</a>
				</td>
			</tr>
			<?php $i++;} ?>
		</tbody>
	</table>
	
</div>

<script>
	function CambiarDatosOficina(dato) {
		var ventana1 = window.open('?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>