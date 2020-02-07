<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/cargos.model.php");
$personal = new Personal();
$data = $personal->Consultar();

$cargos = new Cargos();
$datos = $cargos->Consultar();

?>

	<CENTER><h1>REPORTES</h1></CENTER>
		<form action="controllers/reportes.controller.php" method="POST" role="form">
			<legend>Registro de Reportes</legend>
						
			<div class="form-group">
				<label for="">ID Personal:</label>
				<select name="id_personal" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre'];?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">ID Cargos:</label>
				<select name="id_cargos" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_cargos']; ?>"><?php echo $fila['nombre_cargo'];?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Nombre Actividad:</label>
				<input type="date" class="form-control" id="" name="nomb_actividad" placeholder="ingresar fecha del reporte">
			</div>
			<div class="form-group">
				<label for="">Unidad Medida:</label>
				<input type="date" class="form-control" id="" name="unidad_medida" placeholder="ingresar fecha del reporte">
			</div>

			<div class="form-group">
				<label for="">Fecha Creacion:</label>
				<input type="date" class="form-control" id="" name="fecha_creacion" placeholder="ingresar fecha del reporte">
			</div>

			<div class="form-group">
				<label for="">Fecha Update:</label>
				<input type="text" class="form-control" id="" name="fecha_update" placeholder="cantidad avance">
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>