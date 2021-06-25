<?php
include "header.php";
include("./models/acciones.model.php");
include("./models/cargos.model.php");


$acciones = new Acciones();
$data = $acciones->Consultar();

$cargos = new Cargo();

$i = 1;

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<!-- PAGE CUERPO -->
          	<h1 class="h3 mb-4 text-gray-800">Listado de Acciones</h1>
          	<table class="table table-striped">
				<thead>
					<tr>
						<th>Num.</th>
						<th>Personal</th>
						<th>Cargos</th>
						<th>Nombre de Accion</th>
						<th>unidad Medida</th>
						<th>Opciones</th>
						</tr>
				</thead>
				<tbody>


				<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {

					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<?php
							$dataPersonal = $cargos->NombrePersonal($fila['id_personal']);
							echo $dataPersonal['personal'];
							?>

						</td>
						<td>
						<?php 
						 $dataCargos = $cargos->MostrarCargos($fila['id_cargos']);
						  echo $dataCargos['nombre'];
						
						?>

						</td>
						<td>
							<?php echo $fila['nomb_actividad']; ?>
								
						</td>
						<td>
							<?php echo $fila['unidad_medida']; ?>
						</td>

						<td>

							 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosAcciones(<?php echo $fila['id_acciones'];?>)"><i class="material-icons">cambiar</i></a>


						</td>
					</tr>
				<?php
					$i++;
				}
				?>
				</tbody>
			</table>
        </div>
      </div>
    </div>
  </div>



<script>
	function CambiarDatosAcciones(dato) {
		var ventana1 = window.open('updateAcciones.php?id_acciones='+dato,"MsgWindow", "width=600,height=500");
	}
</script>

<?php include "footer.php"; ?>