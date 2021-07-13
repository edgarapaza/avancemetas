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
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
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
								
								<a href="#" >Cambiar</a>
							</td>
						</tr>
						<?php $i++;} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>