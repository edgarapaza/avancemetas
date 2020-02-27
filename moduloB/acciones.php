<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/cargos.model.php");

$personal = new Personal();
$data = $personal->Consultar();

$cargo = new Cargo();
$data1 = $cargo->Consultar();
?>

		<CENTER><h1>Acciones</h1></CENTER>
		<form action="controllers/acciones.controller.php" method="POST" role="form">
			<legend>Registro de Acciones</legend>

			<div class="form-oto for=">
				<label for="">Personal:</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $data->fetch_array(MYSQLI_ASSOC)):
					    ?>
					<option value="<?php echo $fila['id_personal']; ?>">
						<?php echo $fila['nombre'] ." ".$fila['apellidos']; ?>		
					</option>
						<?php endwhile; ?>
				</select>
			</div>

			<div class="form-oto for=">
				<label for="">Cargo:</label>
				<select name="id_cargos" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $data1->fetch_array(MYSQLI_ASSOC)) {					
					    ?>
					<option value="<?php echo $fila['id_cargos']; ?>">
						<?php echo $fila['nombre_cargo']; ?>		
					</option>
								<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Nombre de la accion:</label>
				<input type="text" class="form-control" id="" name="nomb_actividad" placeholder="NOmbre de actividad">
			</div>


			<div class="form-group">
				<label for="">Unidad de Medidad:</label>
				
				<select name="unidad_medida" class="form-control">
					<option value="0" selected="selected">[Seleccionar]</option>
					<option value="Unidad">Unidad</option>
					<option value="Metros Lineales">Metros Lineales</option>
					<option value="Moneda">Moneda</option>
					<option value="Porcentaje">Porcentaje</option>
										
				</select>
			</div>
						
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>