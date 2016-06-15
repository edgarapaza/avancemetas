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

				<div class="">
					<h2>Listado de Actividades</h2>

					<div class="alert alert-danger"><?php echo @$_REQUEST['mensaje']; ?></div>
						<table class="table">
							<thead>
								<tr>
									<th>Numero</th>
									<th>Actividad</th>
									<th>Unid. Medida</th>
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
									<td><?php #echo $row['actividad'];
											$act = $row['actividad'];
											echo $act;
											 ?></td>
									<td><?php echo $row['unidadMedida']; ?></td>

									<td><button class="btn btn-info" onClick="javascript:window.open('registro.php?idactividad='+<?php echo $row['idactividad']; ?>+'&idpersonal='+<?php echo $_SESSION['personal']; ?>+'&actividad=','','width=400, height=450, scrollbars=YES');">Reportar</button>

									</td>

								</tr>
								<?php
									$i++;
									}

								 ?>
							</tbody>
						</table>

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
