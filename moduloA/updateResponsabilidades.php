<?php
include("./models/responsabilidades.model.php");

$responsabilidades = new Responsabilidades();
$id_resp = $_REQUEST['id_resp'];
$row = $responsabilidades->MostrarResponsabilidades($id_resp);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarResponsabilidades.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Responsabilidades: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $id_resp;?>" name="id_resp">
				<label for="">Nombre Responsabilidad:</label>
				<input type="text" class="form-control" id="" value="<?php echo $row['nomb_resp'];?>" name="nomb_resp">
			</div>
			<div class="form-group">
				<label for="">Documento:</label>
				<input type="text" class="form-control" id="" name="documento" value="<?php echo $row['documento'];?>" >
			</div>
			<div class="form-group">
				<label for="">Unidad de Medida:</label>
				<input type="text" class="form-control" id="" name="unidad_medida" value="<?php echo $row['unidad_medida'];?>" >
			</div>

			<button type="submit" class="btn btn-primary">GUARDAR</button>
		</form>

	</div>