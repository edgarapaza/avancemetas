<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/areas.model.php");

$personal = new Personal();
$data = $personal->Consultar();

$areas = new Areas();
$datos = $areas->Consultar();

?>

	<div class="container">
		<div class="row">
			<CENTER><h1>JEFE DE AREA</h1></CENTER
>		<form action="controllers/jefe_area.controller.php" method="POST" role="form">
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
