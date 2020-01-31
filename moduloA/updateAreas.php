<?php
require("../moduloA/models/areas.model.php");
require("../moduloA/models/metas.model.php");

$area = new Areas();
$idareas = $_REQUEST['id_areas'];
$row = $area->MostrarAreas($idareas);

$metas = new Metas();
$data = $metas->Consultar();

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarAreas.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Areas: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $id_areas;?>" name="id_areas">
				<label for="">Nombre Area:</label>
				<input type="text" class="form-control" id="" value="<?php echo $row['nombre'];?>" name="nombre" >
			</div>
			<div class="form-group">
			    <label for="">Metas:</label>
				<select name="id_metas" id="" class="form-control">
					<option value="<?php echo $row['id_metas']. "-" . $row['nombre_meta'];?>" selected="selected"></option>
						<?php 
						while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
						?>

					<option value="<?php echo $fila['id_metas']; ?>"> <?php echo $fila['nombre_meta'];?>   </option>
						<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Descripcion:</label>
				<input type="text" class="form-control" id="" name="descripcion" value="<?php echo $row['descripcion'];?>" >
			</div>
			<button type="submit" class="btn btn-primary">GUARDAR</button>
		</form>

	</div>
