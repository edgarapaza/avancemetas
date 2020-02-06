<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/jefe_area.model.php");

$personal = new Personal();
$data = $personal->Consultar();

$jefearea = new JefeArea();
$data1 = $jefearea->Consultar();
$jefeAreas = $jefearea->ConsultaJefeArea();
?>

		<CENTER><h1>RESPONSABILIDADES</h1></CENTER>
		<form action="controllers/responsabilidades.controller.php" method="POST" role="form">
			<legend>Registro de Responsabiliades</legend>

			<div class="form-group">
				<label for="">Nombre Responsabliades:</label>
				<input type="text" class="form-control" id="" name="nomb_resp" placeholder="Nombre Responsabliades">
			</div>
			<div class="form-group">
				<label for="">Fecha Inicio de Responsabilidades:</label>
				<input type="date" class="form-control" id="" name="f_inicio_respo" placeholder="Fecha Inicio de Responsabiliades">
			</div>
			<div class="form-group">
				<label for="">Documento:</label>
				<input type="text" class="form-control" id="" name="documento" placeholder="Documento">
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
			<div class="form-oto for=">
				<label for="">Personal:</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					
					    ?>
					<option value="<?php echo $fila['id_personal']; ?>">
						<?php echo $fila['nombre'] ." ".$fila['apellidos']; ?>		
					</option>
								<?php } ?>
				</select>
			</div>
			<div>
				<label for="">Jefe de Area:</label>
				<select name="id_jefearea" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $jefeAreas->fetch_array(MYSQLI_ASSOC)) {					
					    ?>
					<option value="<?php echo $fila['id_jefearea']; ?>">
						<?php 
						echo $fila['nombre']. " ". $fila['apellidos']. "(". $fila['id_jefearea'].")";?></option>
								<?php } ?>
				</select>
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>