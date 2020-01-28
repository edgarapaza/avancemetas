<?php
session_start();
if(isset($_SESSION['personal']))
{
	include_once "header.php";

	require_once "../models/Persona.class.php";
	$persona = new Persona();
	$per = $persona->MostrarPersona($_SESSION['personal']);

	require_once "../models/reporte.class.php";
	$reporte = new Reporte();
	$acti = $reporte->MuestraActividades($_SESSION['personal']);

 ?>

 <script type="text/javascript">
	function agregar(id){

		document.getElementById("idactividad").value = id;
	}
</script>

	<header class="container">
		<h3>Trabajador: <?php echo $per['personal']; ?></h3>
	</header>

	<div class="container">
		<div class="row">
			<section class="col-xs-12 col-sm-6 col-md-8">

				<div class="">
					<h2>Listado de Actividades</h2>

						<table class="table table-hover">
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

									<td>




										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#existe" data-whatever="@mdo" onclick="agregar(this.value='<?php echo $row['idactividad']; ?>')">
							Ingresar Encontrados</button>





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
				<h2 class="alert alert-success">Indicaciones</h2>
				<p>Asegurese de que la información sea exacta y fidedigna, debido a que esta sujeto a verificación por parte del Jefe Inmediato.</p>
				<p>Una vez ingresado los datos, estos no pueden ser modificados, ni manipulados por ninguna persona y estaran a disposicion del Jefe Inmediato superior para su control, visualización de estadisticas y Resumen Diario, Semanal y Mensual.</p>
			</aside>
		</div>
	</div>

	<div class="modal fade" id="existe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">Datos Encontrados</h4>
			      </div>
			      <div class="modal-body">
			        <form action="../controllers/insercionDatos.php">
			           <div class="form-group">
			            actividad:<input type="text" name="idactividad" id="idactividad" >
			            Personal: <input type="text" name="idpersonal" value="<?php echo $_SESSION['personal']; ?>">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Cantidad:</label>
			            <input type="text" name="reporte" id="reporte" placeholder="Numero" required >
			          </div>

			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Observaciones:</label>
			            <textarea rows="4" cols="50" name="obs"></textarea>
			          </div>

				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" name="btnGuardar" >Guardar</button>
				      </div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="modal fade" id="noexiste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			        <h4 class="modal-title" id="exampleModalLabel">Datos Encontrados</h4>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Observacion:</label>
			            <textarea></textarea>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Guardar</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
</body>
</html>

<?php

	include_once "footer.php";
}else{
	header("Location: ../../index.php");
}
 ?>
