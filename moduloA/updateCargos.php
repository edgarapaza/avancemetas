<?php
include("./models/cargos.model.php");

$cargos = new Cargo();
$idcargos = $_REQUEST['idcargos'];
$office = $cargos->MostrarCargos($idcargos);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarNombreCargos.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Cargos: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $idcargos;?>" name="idcargos">
				
				<label for="">Nombre Cargos:</label>
				<input type="text" class="form-control" id="" value="<?php echo $office['nombre_cargo'];?>" name="nombre_cargo" placeholder="Nombre Cargos">

				
				
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>

	</div>