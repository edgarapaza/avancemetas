 <?php
session_start();

if(isset($_SESSION['total']))
{

	include_once "header.php";
	function listadoTodo(){
		require "../models/Actividades.class.php";
		$act = new Actividades();
		$data = $act->ListarTodo();
		return $data;
	}

	require '../models/Listado.class.php';
	$listado = new Listado();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Administrator</title>
</head>
<body>
	<header>
		<h2>Administrator</h2>
	</header>
<div class="table-responsive">
	<section class="container">
		<div class="row">
			<table class="table table-striped table-hover">
				<thead>
					<tr class="info">
						<th>Personal</th>
						<th>Oficina</th>
						<th>Cargo</th>
						<th>Actividad</th>
						<th>Unid. Medida</th>
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$data = listadoTodo();
					while ($fila = $data->fetch_assoc()) {

					?>
					<tr>
						<td><?php
							$per = $listado->PersonalUnico($fila['id_personal']);
							echo $per['personal'];
						?></td>
						<td><?php

							$ofi = $listado->OficinaUnico($fila['id_oficina']);
							echo $ofi['oficina'];
							?></td>
						<td><?php

							$car = $listado->CargoUnico($fila['id_cargo']);
							echo $car['cargo'];
							?></td>
						<td><?php echo $fila['actividad']; ?></td>
						<td><?php echo $fila['unidadMedida']; ?></td>
						<td><?php echo $fila['obs']; ?></td>
					</tr>
					<?php
						}
					 ?>

				</tbody>
			</table>
		</div>
	</section>
</div>
</body>
</html>

<?php
}else{
	header("Location: ../index.php");
}
 ?>