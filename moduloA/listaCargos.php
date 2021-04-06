
<?php
include("./models/cargos.model.php");
include("./models/oficinas.model.php");

$cargos = new Cargo();
$data = $cargos->Consultar();
$oficinas = new Oficinas();

$i = 1;

?>

<div id="">
	<div class="">
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Oficina / Direccion</th>
					<th>Nombre Cargo</th>
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
						 $office = $oficinas->MostrarOficina($fila['id_oficina']);
						 echo $office['nombre_of'];

						?>
					</td>
					<td><?php //echo $fila['id'];
					          echo $fila['nombre_cargo']; ?>
					          	
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