<?php
session_start();

include_once "header.php";
	include_once "./models/listado.model.php";

	$listado = new Listado();
	$inst = $listado->Institucion();
	$ofi = $listado->Oficina();
	$car = $listado->Cargo();
	$per = $listado->Personal();

 ?>

				
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Asignar Tareas - Archivo Regional Puno</h1>

				<h3>Asignacion de Tareas</h3>
				<form class="form-group" action="controllers/actividadesControllers.php">
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
										<option value="<?php echo $fila['id_personal']; ?>"> <?php echo $fila['nombre']; ?> </option>
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
										<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['nombre_inst']; ?> </option>
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
									<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['nombre']; ?> </option>

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
									<option value="<?php echo $fila['id_cargos'];  ?>">  <?php echo $fila['nombre']; ?></option>

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
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>