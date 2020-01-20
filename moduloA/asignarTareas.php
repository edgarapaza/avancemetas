<?php
session_start();
if(isset($_SESSION['total']))
{
	include_once "header.php";
	include_once "./models/Listado.class.php";

	$listado = new Listado();
	$cargo = $listado->Cargo();
	$institucion = $listado->Institucion();
	$oficina = $listado->Oficina();
	$personal = $listado->Personal();

 ?>

	<script>
		  document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems, options);
		});
	</script>

	<div class="container">
		<div class="row">
			<div class="col s6">
			
			<section>
				<h3>Asignacion de Tareas</h3>

				<form action="./controllers/actividadesControllers.php">

				
					<label>Trabajador</label>
					<select name="id_personal" id="id_personal" class="browser-default s6">
						<option value="" disabled selected>Choose your option</option>
						<?php while ($fila = $personal->fetch_array(MYSQLI_ASSOC)) { ?>
						<option value="<?php echo $fila['id_personal']; ?>"> <?php echo $fila['personal']; ?> </option>
						<?php } ?>
					</select>

					<label>Direccion:</label>
					<select name="id_institucion" id="id_institucion" class="browser-default s6">
						<option value="" disabled selected>Choose your option</option>
						<?php while ($fila_ins = $institucion->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila_ins['id_institucion']; ?>"> <?php echo $fila_ins['nombre']; ?> </option>
						<?php } ?>
					</select>

					<label>Oficina:</label>
					<select name="id_oficina" id="id_oficina" class="browser-default s6">
						<option value="" disabled selected>Choose your option</option>
						<?php while ($fila_oficina = $oficina->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila_oficina['id_oficina']; ?>"> <?php echo $fila_oficina['oficina']; ?> </option>
						<?php } ?>
					</select>

					<label>Cargo:</label>
					<select name="id_cargo" id="id_cargo" class="browser-default s6">
						<option value="" disabled selected>Choose your option</option>
						<?php while ($fila_cargo = $cargo->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $fila_cargo['id_cargo'];  ?>">  <?php echo $fila_cargo['cargo']; ?></option>
						<?php } ?>
					</select>

					<label>Actividad (Tarea) Asignada:</label>
					<input type="text" name="actividad" id="actividad" class="" />

					<label>Unidad de Medida</label>
					<select name="unidadMedida" class="browser-default s6">
						<option value="Numerico">Numerico</option>
						<option value="Porcentaje">Porcentaje</option>
						<option value="Monetario">Monetario</option>
						<option value="Metros">Metros Lineales</option>
					</select>

					<label>Observaciones:</label>
					<input type="text" name="obs" class="" />

					<button type="submit" name="btnFormulario" id="btnFormulario" class="btn blue darken-4">Guardar</button>

				</form>
			</section>
			</div>
			<div class="col s6">
				<h3>Titulo</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		
	</div>

<?php

	include "footer.php";

}else{
	header("Location: ../index.php");
}
?>