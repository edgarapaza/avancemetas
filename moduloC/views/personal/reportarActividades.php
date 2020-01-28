<?php
	include "../controllers/actividadesControllers.php";
	$tareas = new Tareas();
	$data = $tareas->listado(1);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Reportar Actividades</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="col-md-12">
				<h2>Reportes Diarios - Archivo Regional Puno</h2>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
		<form>
			<div class="form-group">
				<label for="Cargo">Cargo:Organos de Linea</label>
				<br>
				<label for="Oficina">Oficina: Archivo Intermedio</label>
				<br>
				<label for="Cargo">Cargo: Director del Archivo Intermedio</label>
				<br>
				<label for="tareas">Tareas:</label>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Numero</th>
							<th>Tarea</th>
							<th>Uni. Medida</th>
							<th>Avance hoy</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while ($fila = $data->fetch_assoc()) {
							echo $fila['id_cargo'];
							echo $fila['id_oficina'];
							echo $fila['id_institucion'];
					?>
						<tr>
							<td>1</td>
							<td><?php echo $fila['actividad']; ?></td>
							<td><?php echo $fila['unidadMedida']; ?></td>
							<td><input	name ="cantidad" type="text" placeholder="Numero">	</td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</body>
</html>