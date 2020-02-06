<?php
include("./models/reportes.model.php");

$reportes = new Reportes();
$id_reportes = $_REQUEST['id_reportes'];
$row = $reportes->MostrarReportes($id_reportes);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarReportes.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Reportes: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $id_reportes;?>" name="id_reportes">
				<label for="">Cantidad Avance</label>
				<input type="text" class="form-control" id="" value="<?php echo $row['cantidad_avance'];?>" name="cantidad_avance">
			</div>

			<button type="submit" class="btn btn-primary">GUARDAR</button>
		</form>

	</div>