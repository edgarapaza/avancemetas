<?php
session_start();
if(isset($_SESSION['personal']))
{

	require_once "../models/Persona.class.php";
	$persona = new Persona();
	$per = $persona->MostrarPersona($_SESSION['personal']);

	include "header.php";

	require_once "../models/reporte.class.php";
	$reporte = new Reporte();
	$acti = $reporte->MuestraActividades($_SESSION['personal']);

 ?>

	<header class="container">
		<h3>Trabajador: <?php echo $per['personal']; ?></h3>
	</header>

	<div class="container">
		<div class="row">
			<section class="col-xs-12 col-sm-6 col-md-8">

				<div class="form-group">
					<form class="form-control" action="">

						<h2>Listado de Actividades</h2>

						<table class="table">
							<thead>
								<tr>
									<th>Numero</th>
									<th>Actividad</th>
									<th>Unid. Medida</th>
									<th>Reporte Hoy</th>
									<th>Observaciones</th>
								</tr>
							</thead>

							<tbody>

								<?php
									$i =1;
									while ($row = $acti->fetch_assoc())
									{
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['actividad']; ?></td>
									<td><?php echo $row['unidadMedida']; ?></td>
									<td>
										<input type="text" name="reporte" class="form-control" />
									</td>
									<td><textarea cols="20" name="obs" class="form-control"></textarea></td>

								</tr>
								<?php
									$i++;
									}

								 ?>
							</tbody>
						</table>
						<button name="guardar" type="submit" class="btn btn-info">Guardar</button>
					</form>
				</div>


			</section>

			<aside class="col-xs-12 col-sm-6 col-md-4">
				<h2>Aside</h2>
			</aside>
		</div>
	</div>

	<footer class="container">

	</footer>
</body>
</html>

<?php
}else{
	header("Location: ../../index.php");
}
 ?>
