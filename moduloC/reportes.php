<?php
include("./models/reportes.model.php");
include("./models/acciones.model.php");

$reportes = new Reportes();
$data = $reportes->Consultar();

$acciones = new Acciones();

$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Id Acciones</th>
					<th>Fecha Reporte</th>
					<th>Cantidad</th>
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
						 
						$dataacciones = $acciones->MostrarAcciones($fila['id_acciones']);
						printf(" %s ",$dataacciones['nomb_actividad']); 
						?>
						
					</td>
					<td><?php echo $fila['f_reportes']; ?></td>
					<td><?php echo $fila['cantidad']; ?></td>
					
					<td>
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosReportes(<?php echo $fila['id_reportes'];?>)"><i class="material-icons">how_to_reg</i></a>
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

<script>
	function CambiarDatosReportes(dato) {
		var ventana1 = window.open('updateReportes.php?idreportes='+dato,"MsgWindow", "width=600,height=500");
	}
</script>