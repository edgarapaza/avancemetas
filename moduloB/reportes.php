<?php
require("../moduloA/models/personal.model.php");
require("./models/acciones.model.php");
$personal = new Personal();
$data = $personal->Consultar();

$acciones = new Acciones();
$datos = $acciones->Consultar();

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
				<label for="">ID Acciones:</label>
				<select name="id_acciones" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_acciones']; ?>"><?php echo $fila['nomb_actividad'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Fecha Reporte:</label>
				<input type="date" class="form-control" id="" name="f_reportes" placeholder="ingresar fecha del reporte">
			</div>
			<div class="form-group">
				<label for="">Cantidad:</label>
				<input type="text" class="form-control" id="" name="cantidad" placeholder="ingresar cantidad">
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>