<?php
require("../moduloA/models/oficinas.model.php");
require("../moduloA/models/areas.model.php");

$oficinas = new Oficinas();
$data = $oficinas->Consultar();

$areas = new Areas();
$datos = $areas->Consultar();
?>

	<div class="container">
		<div class="row">
			<CENTER><h1>OFICINAS AREAS</h1></CENTER>
		<form action="controllers/oficinas_areas.controller.php" method="POST" role="form">
			<legend>Registro de Oficinas_Areas</legend>

		
			<div class="form-group">
				<label for="">Nombre de Oficina:</label>
				<select name="id_oficinas" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre_of'];?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Nombre de Área:</label>
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
