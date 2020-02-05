<?php 
include("../moduloA/models/areas.model.php");
include("./models/metas.model.php");


$areas = new Areas();
$metas = new Metas();
$data = $areas->Consultar();

$i = 1;
?>
<link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css">
<div id="caja">
<div class="container section">
	
	<h2>Lista de Areas del Archivo Regional</h2>
	<table class="table">
		<caption>table title and/or explanatory text</caption>
		<thead>
			<tr>
				<th>Num.</th>
				<th>Nombre</th>
				<th>Metas</th>
				<th>Descripcion</th>
				<th>Direccion/Oficina</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $fila['nombre']; ?></td>
				<td>
					<?php 
						$datameta = $metas->MostrarMetaOficina($fila['id_metas']);
						printf(" %s ",$datameta['nombre_meta']); 
					?>
				</td>
				<td><?php echo $fila['descripcion']; ?></td>
				<td><?php 
				$office = $areas->DatosDireccionOficina($fila['idoficina']);
				echo $office['sigla'];
				?></td>
				
				<td>
					<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosAreas(<?php echo $fila['id_areas'];?>)"><i class="material-icons">how_to_reg</i></a>

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
	function CambiarDatosAreas(dato) {

		window.open('updateAreas.php?id_areas='+dato,"MsgWindow", "width=600,height=500");
	}
</script>
