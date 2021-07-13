<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/areas.model.php");
$personal = new Personal();
$data = $personal->Consultar();
$areas = new Areas();
$datos = $areas->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">JEFE DE AREA</h2>
				<form action="controllers/jefe_area.controller.php" method="POST" role="form">
					<legend>Completa el formulario</legend>
					
					<div class="form-group">
						<label for="">Persona</label>
						<select name="id_personal" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
												while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
							?>
							<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre']. " " . $fila['apellidos'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Area</label>
						<select name="id_areas" id="" class="form-control">
							<option value="0" selected="selected">Select</option>
							<?php
												while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {
							?>
							<option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
							<?php } ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">enviar</button>
					
				</form>
			</div>
		</div>
	</div>
</div>