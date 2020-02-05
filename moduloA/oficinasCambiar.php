<?php
include("./models/oficinas.model.php");

$oficinas = new Oficinas();
$idoficina = $_REQUEST['idoficina'];
$office = $oficinas->MostrarOficina($idoficina);

?>
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarNombreOficina.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Oficina: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $idoficina;?>" name="idoficina">
				<label for="">Nombre Oficina:</label>
				<input type="text" class="form-control" id="" value="<?php echo $office['nombre_of'];?>" name="nombre_of" placeholder="Nombre Oficina">
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>

	</div>

