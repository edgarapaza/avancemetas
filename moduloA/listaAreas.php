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
				<td>
					<a href="updateAreas.php?idareas=<?php echo $fila['id_areas']; ?>"> Modificar</a>
					
				</td>
				<td>
					<a href="#" id="#cambiarAreas" class="btn btn-info btn-sm" onclick="CambiarDatosAreas(<?php echo $fila['id'];?>)"><i class="material-icons">Modificar</i></a>

					<a href="areas.php" id="nuevaArea" class="btn btn-success btn-sm"><i class="material-icons">add</i></a>

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
		var ventana1 = window.open('updateAreas.php?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>
