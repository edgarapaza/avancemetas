<?php
session_start();
include_once "header.php";
	include_once "./models/listado.model.php";
	$listado = new Listado();
	$inst = $listado->Institucion();
	$gerencia = $listado->Gerencias();
	$subgerencia = $listado->SubGerencias();
	$area = $listado->Areas();
	$car = $listado->Cargo();
	$per = $listado->Personal();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Asignacion de Tareas</h2>
				
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
									while ($fila = $per->fetch_array(MYSQLI_ASSOC))
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
									while ($fila = $inst->fetch_array(MYSQLI_ASSOC))
									{
								?>
								<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['nombre_inst']; ?> </option>
								<?php
									}
								?>
							</select></td>
						</tr>
						<tr>
							<td>Gerencia</td>
							<td><select name="gerencia" class="form-control">
								<?php
									while ($fila = $gerencia->fetch_array(MYSQLI_ASSOC))
									{
								?>
								<option value="<?php echo $fila['idgerencia']; ?>"> <?php echo $fila['nombregerencia']; ?> </option>
								<?php
									}
								?>
							</select></td>
						</tr>
						<tr>
							<td>Sub Gerencia</td>
							<td><select name="subgerencia" class="form-control">
								<?php
									while ($fila = $subgerencia->fetch_array(MYSQLI_ASSOC))
									{
								?>
								<option value="<?php echo $fila['idsubgerencia']; ?>"> <?php echo $fila['nomsubger']; ?> </option>
								<?php
									}
								?>
							</select></td>
						</tr>
						<tr>
							<td>Cargo</td>
							<td><select name="id_cargo" class="form-control">
								<?php
								while ($fila = $car->fetch_array(MYSQLI_ASSOC))
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
							<td>
								<select name="unidadMedida" class="form-control">
									<option value="Numerico">Numerico</option>
									<option value="Porcentaje">Porcentaje</option>
									<option value="Monetario">Monetario</option>
									<option value="Metros">Metros Lineales</option>
								</select>
							</td>
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