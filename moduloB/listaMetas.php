
<?php 
include("./models/metas.model.php");


$meta = new Metas();
$data = $meta->Consultar();

$i = 1;

?>

<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Nombre Meta</th>
					<th>Programado</th>
					<th>Unidad de medida</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php //echo $fila['id'];
					          echo $fila['nombre_meta']; ?></td>
					<td>
						<?php 
							echo $fila['programado'];
						 ?>
					</td>
					<td>
						<?php 
						 
						echo $fila['unidad_medida'];
						?>
					</td>
					<td>
						
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosMeta(<?php echo $fila['id_metas'];?>)"><i class="material-icons">how_to_reg</i></a>
						
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
	function CambiarDatosMeta(dato) {
		var ventana1 = window.open('updateMetas.php?idmeta='+dato,"MsgWindow", "width=600,height=500");
	}
</script>