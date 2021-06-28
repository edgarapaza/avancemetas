<?php
include("./models/acciones.model.php");

$acciones = new Acciones();
$id_acciones = $_REQUEST['id_acciones'];
$row = $acciones->MostrarAcciones($id_acciones);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">

	<div class="container">

	<form action="controllers/cambiarAcciones.controller.php" method="POST" role="form">
		<legend>Cambiar Datos de Acciones: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $id_acciones;?>" name="id_acciones">
				
				<label for="">Nombre de Aciones: </label>
				<input type="text" class="form-control" id="" value="<?php echo $row['nomb_actividad'];?>" name="nomb_actividad" placeholder="Nombre de Accion">
			
				<label>Unidad de Medida: </label>
				<input type="text" class="form-control" id="" value="<?php echo $row['unidad_medida'];?>" name="unidadmedida" placeholder="Unidad de Medida">
	
			</div>
						
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
	</div>