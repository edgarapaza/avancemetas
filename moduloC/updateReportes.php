<?php
include("./models/reportes.model.php");

$reportes = new Reportes();
$idreportes = $_REQUEST['idreportes'];
$row = $reportes->MostrarReportes($idreportes);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarReportes.controller.php" method="POST" role="form">
			<legend>Cambiar Cantidad de Reportes: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $idreportes;?>" name="idreportes">
				<label for="">Cantidad de Reportes:</label>
				<input type="text" class="form-control" id="" value="<?php echo $row['cantidad'];?>" name="cantidad" >
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>

	</div>

