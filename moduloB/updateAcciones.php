<?php
include("./models/acciones.model.php");

$acciones = new Acciones();
$id_acciones = $_REQUEST['id_acciones'];
$row = $acciones->MostrarAcciones($id_acciones);

?>
<link rel="stylesheet" type="text/css" href="./assets/css/material/dashboard.css">

	<form action="controllers/cambiarAcciones.controller.php" method="POST" role="form">
		<legend>Cambiar Datos de Acciones: </legend>

			<div class="form-oto for=">
				<label for="">Oficina:</label>
				<input type="text" name="oficina" value="oficina">
			</div>

			<div class="form-oto for=">
				<label for="">Areas:</label>
				<select name="id_areas" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar Area]</option>
						<?php 
							while ($fila2 = $data_a->fetch_array(MYSQLI_ASSOC)):
					    ?>d
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
				<input type="text" class="form-control" id="" name="nomb_actividad" placeholder="NOmbre de la accion">
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