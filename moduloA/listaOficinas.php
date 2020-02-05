<?php
include("./models/oficinas.model.php");
include("./models/metas.model.php");

$oficinas = new Oficinas();
$metas = new Metas();
$data = $oficinas->Consultar();

$oficinas = new Oficinas();
$office = $oficinas->Consultar();


$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Nombre Oficina</th>
					<th>Id meta</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>

				
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php //echo $fila['id'];
					          echo $fila['nombre_of']; ?>
					          	
					</td>
					<td>
						<?php 
						 
						$datameta = $metas->MostrarMetaOficina($fila['id_metas']);
						printf("Meta: %s - Programado (%s)",$datameta['nombre_meta'], $datameta['programado']); 
						?>
						
					</td>
					<td>
						
						 <a href="#" id="#cambiarOficina" class="btn btn-info btn-sm" onclick="CambiarDatosOficina(<?php echo $fila['id'];?>)"><i class="material-icons">how_to_reg</i></a>
						 

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
	function CambiarDatosOficina(dato) {
		var ventana1 = window.open('oficinasCambiar.php?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>