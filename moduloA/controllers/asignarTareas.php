<?php
session_start();
if(isset($_SESSION['total']))
{

	include "../models/Listado.class.php";

	$listado = new Listado();
	$inst = $listado->Institucion();
	$ofi = $listado->Oficina();
	$car = $listado->Cargo();
	$per = $listado->Personal();

	include "../views/header.php";
 ?>


	<header>
		<div class="container">
			<div class="col-md-12">
				<h2>Asignar Tareas - Archivo Regional Puno</h2>
			</div>
		</div>
	</header>
	<br>
	<section class="container">
		<div class="row">
			<section class="col-md-8 formulario">
				<h3>Asignacion de Tareas</h3>
				<form class="form-group" action="../controllers/actividadesControllers.php">
					<table class="table">
						<tr>
							<th>Datos</th>
							<th>Valores</th>
						</tr>
						<tr>
							<td>Trabajador</td>
							<td><select name="id_personal" class="form-control">
								<?php
									while ($fila = $per->fetch_assoc())
									{
								?>
										<option value="<?php echo $fila['id_personal']; ?>"> <?php echo $fila['personal']; ?> </option>
								<?php
									}
								 ?>
							</select></td>
						</tr>
						<tr>
							<td>Organizacion a que pertenece</td>
							<td><select name="id_institucion" class="form-control">
								<?php
									while ($fila = $inst->fetch_assoc())
									{
								?>
										<option value="<?php echo $fila['id_institucion']; ?>"> <?php echo $fila['nombre']; ?> </option>
								<?php
									}
								 ?>
							</select></td>
						</tr>
						<tr>
							<td>Oficina</td>
							<td><select name="id_oficina" class="form-control">
								<?php
									while ($fila = $ofi->fetch_assoc())
									{
								?>
									<option value="<?php echo $fila['id_oficina']; ?>"> <?php echo $fila['oficina']; ?> </option>

								<?php
									}

								 ?>
							</select></td>
						</tr>
						<tr>
							<td>Cargo</td>
							<td><select name="id_cargo" class="form-control">
								<?php
								while ($fila = $car->fetch_assoc())
								{
								?>
									<option value="<?php echo $fila['id_cargo'];  ?>">  <?php echo $fila['cargo']; ?></option>

								<?php
								}
								 ?>
							</select></td>
						</tr>
						<tr>
							<td>Actividad (Tarea) Asignada</td>
							<td><input type="text" name="actividad" class="form-control" /></td>
						</tr>
						<tr>
							<td>Unidad de Medida</td>
							<td><select name="unidadMedida" class="form-control">
								<option value="Numerico">Numerico</option>
								<option value="Porcentaje">Porcentaje</option>
								<option value="Monetario">Monetario</option>
								<option value="Metros">Metros Lineales</option>
							</select></td>

						</tr>
						<tr>
							<td>Observaciones:</td>
							<td><input type="text" name="obs" class="form-control" /></td>
						</tr>

						<tr>
							<td></td>
							<td><button type="submit" name="btnFormulario" class="btn btn-primary">Guardar</button></td>
						</tr>
					</table>
					<div class="alert alert-danger" role="alert">
						<span class="glyphicon glyphicon-alert:before"	></span>
							<?php echo @$_REQUEST['mensaje']; ?>
					</div>

				</form>
			</section>
			<aside class="col-md-4">
				<h3>Titulo</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</aside>
		</div>
	</section>
</body>
</html>
<?php
}else{
	header("Location: ../index.php");
}
 ?>