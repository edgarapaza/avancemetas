<?php
require("models/oficinas.model.php");
require("models/areas.model.php");
require("models/cargos.model.php");
require("models/personal.model.php");
$oficinas = new Oficinas();
$areas    = new Areas();
$cargos   = new Cargo();
$personal = new Personal();
$dataOficina  = $oficinas->Consultar();
$dataAreas    = $areas->Consultar();
$dataCargos   = $cargos->Consultar();
$dataPersonal = $personal->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">OFICINAS</h2>
				<h1></h1>
				<form action="controllers/asignacionPersonal.controller.php" method="POST" role="form">
					<legend>Asignacion de Personal - Archivo Regional de Puno</legend>
					
					<div class="form-group">
						<label for="">Nombre Oficina:</label>
						<select name="idoficina" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $dataOficina->fetch_array(MYSQLI_ASSOC)) {					 ?>
							<option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre_of'];?></option>
							<?php } ?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="">Nombre del Area:</label>
						<select name="idarea" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $dataAreas->fetch_array(MYSQLI_ASSOC)) {					 ?>
							<option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nombre del Cargo:</label>
						<select name="idcargo" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $dataCargos->fetch_array(MYSQLI_ASSOC)) {					 ?>
							<option value="<?php echo $fila['id_cargos']; ?>"><?php echo $fila['nombre_cargo'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nombre del Personal:</label>
						<select name="idpersonal" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $dataPersonal->fetch_array(MYSQLI_ASSOC)) {					 ?>
							<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre']. " ".$fila['apellidos'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Documento con que asumio el Cargo:</label>
						<input type="text" name="documento" placeholder="Doc. con que asume el Cargo">
					</div>
					<div class="form-group">
						<label for="">Fecha que asumio el Cargo:</label>
						<input type="date" name="fechaCargo" placeholder="Doc. con que asume el Cargo">
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>