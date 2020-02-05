<?php
include("./models/responsabilidades.model.php");
include("../moduloA/models/personal.model.php");

$responsabilidades = new Responsabilidades();
$personal = new Personal();
$data = $responsabilidades->Consultar();

$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Nombre Resp.</th>
					<th>Fecha Inicio de Resp.</th>
					<th>Documento</th>
					<th>unidad Medida</th>
					<th>Id Personal</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $fila['nomb_resp']; ?></td>
					<td><?php echo $fila['f_inicio_respo']; ?></td>
					<td><?php echo $fila['documento']; ?></td>
					<td><?php echo $fila['unidad_medida']; ?></td>
					<td>
						<?php 
						 
						$datapersonal = $personal->MostrarPersonalUno($fila['id_personal']);
						printf(" %s ",$datapersonal['nombre']); 
						?>
						
					</td>
					<td>
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosResp(<?php echo $fila['id_responsabilidades'];?>)"><i class="material-icons">how_to_reg</i></a>
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
	function CambiarDatosResp(dato) {
		var ventana1 = window.open('updateResponsabilidades.php?id_resp='+dato,"MsgWindow", "width=600,height=500");
	}
</script>