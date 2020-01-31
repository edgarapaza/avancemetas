<?php 
include("../moduloA/models/areas.model.php");

$areas = new Areas();
$data = $areas->Consultar();

$i = 1;
?>
<link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css">

<div class="container">
	
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
				<td><?php echo $fila['id_metas']; ?></td>
				<td><?php echo $fila['descripcion']; ?></td>
				<td>
					<a href="updateAreas.php?idareas=<?php echo $fila['id_areas']; ?>"> Modificar</a>
				</td>
			</tr>
		<?php 
		$i++;
		} ?>
		</tbody>
	</table>
</div>