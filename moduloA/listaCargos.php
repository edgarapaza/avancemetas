
<?php
include("./models/cargos.model.php");

$cargos = new Cargo();
$data = $cargos->Consultar();

$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div id="caja"> Caja
	<div class="container section">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Nombre Cargo</th>
					<th>Fecha de Inicio</th>
					<th>Fecha de Fin</th>
					<th>Documentos</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php //echo $fila['id'];
					          echo $fila['nombre_cargo']; ?>
					          	
					</td>
					<td>
						<?php 
						 
						echo $fila['f_inicio_cargo'];
						?>
						
					</td>
					<td>
						<?php
						echo $fila['f_fin_cargo'];		
						?>
					</td>

					<td>
						<?php
						echo $fila['documento'];		
						?>
					</td>
					<td>
						
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiaCargos(<?php echo $fila['id_cargos'];?>)"><i class="material-icons">how_to_reg</i></a>
						 
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
	function CambiaCargos(dato) {
		var ventana1 = window.open('updateCargos.php?idcargos='+dato,"", "width=600,height=500");
	}
</script>