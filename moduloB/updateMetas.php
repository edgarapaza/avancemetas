<?php
include("./models/metas.model.php");

$metas = new Metas();
$idmeta = $_REQUEST['idmeta'];
$office = $metas->MostrarMetaPersonal($idmeta);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarNombreMeta.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Metas: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $idmeta;?>" name="idmeta">
				<label for="">Nombre Metas:</label>
				<input type="text" class="form-control" id="" value="<?php echo $office['nombre'];?>" name="nombre" placeholder="Nombre Meta">
				
				<label>Cantidad: </label>
				<input type="text" class="form-control" id="" value="<?php echo $office['cantidad'];?>" name="cantidad" placeholder="Programado Meta">

				<label>Unidad de medida: </label>
				<input type="text" class="form-control" id="" value="<?php echo $office['unidadmedida'];?>" name="unidadmedida" placeholder="Unidad de Medida">

				<label>Frecuencia: </label>
				<input type="text" class="form-control" id="" value="<?php echo $office['frecuencia'];?>" name="frecuencia" placeholder="Frecuencia">

				
			</div>
		
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>

	</div>