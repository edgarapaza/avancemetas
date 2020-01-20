 <?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if(isset($_SESSION['total']))
{

	include_once "header.php";
	function listadoTodo(){
		
		include "./models/Actividades.class.php";
		$act = new Actividades();
		$data = $act->ListarTodo();
		return $data;
	}

	require './models/Listado.class.php';
	$listado = new Listado();

 ?>

<div class="container">
	<div class="row">
		<h2>Administrator</h2>
	</div>

</div>

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