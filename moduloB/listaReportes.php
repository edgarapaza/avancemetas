<?php
include("./models/reportes.model.php");
include("./models/responsabilidades.model.php");
include("../moduloA/models/personal.model.php");

$reportes = new Reportes();
$data = $reportes->Consultar();

$responsabilidades = new Responsabilidades();
$personal = new Personal();


$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Id Personal</th>
					<th>Id Responsabilidades</th>
					<th>Fecha Reporte</th>
					<th>Cantidad Avance</th>
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
						 
						$datapersonal = $personal->MostrarPersonalUno($fila['id_personal']);
						printf(" %s ",$datapersonal['nombre']); 
						?>
						
					</td>
					<td>
						<?php 
						 
						$dataresp = $responsabilidades->MostrarResponsabilidades($fila['id_responsabilidades']);
						printf(" %s ",$dataresp['nomb_resp']); 
						?>
						
					</td>
					<td><?php echo $fila['f_reportes']; ?></td>
					<td><?php echo $fila['cantidad_avance']; ?></td>
					
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
		var ventana1 = window.open('updateReportes.php?id_resp='+dato,"MsgWindow", "width=600,height=500");
	}
</script>