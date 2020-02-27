<?php
require("../moduloA/models/oficinas.model.php");
require("../moduloA/models/areas.model.php");
require("../moduloA/models/cargos.model.php");
require("../moduloA/models/personal.model.php");

$oficinas = new Oficinas();
$data_of = $oficinas->Consultar();

$areas = new Areas();
$data_a = $areas->Consultar();

$cargo = new Cargo();
$data_c = $cargo->Consultar();

$personal = new Personal();
$data_p = $personal->Consultar();

?>

		<CENTER><h1>Acciones</h1></CENTER>

		<form action="controllers/acciones.controller.php" method="POST" role="form">
			<legend>Registro de Acciones</legend>

			<div class="form-oto for=">
				<label for="">Oficina:</label>
				<select name="id_oficina" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar Oficina]</option>
						<?php 
							while ($fila1 = $data_of->fetch_array(MYSQLI_ASSOC)):
					    ?>
					<option value="<?php echo $fila1['id']; ?>">
						<?php echo $fila1['nombre_of']; ?>		
					</option>
						<?php endwhile; ?>
				</select>
			</div>

			<div class="form-oto for=">
				<label for="">Areas:</label>
				<select name="id_areas" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar Area]</option>
						<?php 
							while ($fila2 = $data_a->fetch_array(MYSQLI_ASSOC)):
					    ?>
					<option value="<?php echo $fila2['id_areas']; ?>">
						<?php echo $fila2['nombre']; ?>		
					</option>
						<?php endwhile; ?>
				</select>
			</div>

			<div class="form-oto for=">
				<label for="">Cargo:</label>
				<select name="id_cargos" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar Cargo]</option>
						<?php 
							while ($fila4 = $data_c->fetch_array(MYSQLI_ASSOC)):				
					    ?>
					<option value="<?php echo $fila4['id_cargos']; ?>">
						<?php echo $fila4['nombre_cargo']; ?>		
					</option>
								<?php endwhile; ?>
				</select>
			</div>

			<div class="form-oto for=">
				<label for="">Personal:</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar Personal]</option>
						<?php 
							while ($fila5 = $data_p->fetch_array(MYSQLI_ASSOC)):					
					    ?>
					<option value="<?php echo $fila5['id_personal']; ?>">
						<?php echo $fila5['nombre'] ." ".$fila5['apellidos']; ?>
					</option>
								<?php endwhile; ?>
				</select>
			</div>

			
			<div class="form-group">
				<label for="">Nombre de la accion:</label>
				<input type="text" class="form-control" id="" name="nomb_actividad" placeholder="NOmbre de actividad">
			</div>


			<div class="form-group">
				<label for="">Unidad de Medidad:</label>
				
				<select name="unidad_medida" class="form-control">
					<option value="0" selected="selected">[Unidad de Medida]</option>
					<option value="Unidad">Unidad</option>
					<option value="Metros Lineales">Metros Lineales</option>
					<option value="Moneda">Moneda</option>
					<option value="Porcentaje">Porcentaje</option>
                    <option value="Servicio">Servicio</option>
                    <option value="Documentos">Documentos</option>
                    <option value="Escritura">Escritura</option>
                    <option value="Usuario">Usuario</option>
                    <option value="Accion">Accion</option>
                    <option value="Inst. Superv">Inst. Superv</option>

				</select>
			</div>
						
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
