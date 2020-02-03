<?php
require("../moduloA/models/metas.model.php");

$metas = new Metas();
$data = $metas->Consultar();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>	
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<CENTER><h1>AREAS</h1></CENTER>
		<form action="controllers/areas.controller.php" method="POST" role="form">
			<legend>Registro de Areas</legend>
            <div class="form-group">
				<label for="">Nombre de Area:</label>
				<input type="text" class="form-control" id="" name="nombre" placeholder="Nombre de Area">
			</div>
			

			<div class="form-group">
							<label for="">Metas:</label>
							<select name="id_metas" id="" class="form-control">
								<option value="0" selected="selected">Select</option>
								<?php 
								while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

								 <option value="<?php echo $fila['id_metas']; ?>"><?php echo $fila['nombre_meta']. "-" . $fila['programado'];?></option>
								<?php } ?>
							</select>
			</div>
			<div class="form-group">
				<label for="">Descripcion:</label>
				<input type="text" class="form-control" id="" name="descripcion" placeholder="Descripcion">
			</div>
			
		
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
		</div>
	</div>
</body>
</html>

