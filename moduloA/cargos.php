<?php
include "header.php";
require("./models/oficinas.model.php");
require("./models/areas.model.php");
require("./models/personal.model.php");
$oficinas = new Oficinas();
$office = $oficinas->Consultar();
$areas = new Areas();
$area = $areas->Consultar();
$personal = new Personal();
$persona = $personal->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Nuevo Cargo</h2>
				<form action="controllers/cargos.controller.php" method="POST" role="form">
					<legend>Registro de Cargos</legend>
					<div class="form-group">
						<label for="">Lista de Sub Gerencia:</label>
						<select name="idoficina" id="idoficina" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $office->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'];?></option>
							<?php } ?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="">Listado de Áreas:</label>
						<select name="idarea" id="idarea" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $area->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Listado de Personal:</label>
						<select name="idpersonal" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
							while ($fila = $persona->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre']." ".$fila['apellidos'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nombre Cargo:</label>
						<input type="text" class="form-control" id="nombre_cargo" name="nombre_cargo" placeholder="Nombre Cargo">
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
	
	<?php include "footer.php"; ?>