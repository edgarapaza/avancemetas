<?php
include("./models/acciones.model.php");

include("../moduloA/models/cargos.model.php");


$acciones = new Acciones();
$data = $acciones->Consultar();

$cargos = new Cargo();

$i = 1;

?>


	<div class="container">
		<table class="table">
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
						  echo $dataCargos['nombre_cargo'];
						
						?>
						
					</td>
					<td><?php echo $fila['nomb_actividad']; ?></td>
					<td><?php echo $fila['unidad_medida']; ?></td>


					<td>
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosAcciones(<?php echo $fila['id_acciones'];?>)"><i class="material-icons">how_to_reg</i></a>
					</td>
				</tr>
			<?php
				$i++;
			}
			?>
			</tbody>
		</table>

		
	</div>

<script>
	function CambiarDatosAcciones(dato) {
		var ventana1 = window.open('updateAcciones.php?id_acciones='+dato,"MsgWindow", "width=600,height=500");
	}
</script>