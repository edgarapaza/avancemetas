<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/areas.model.php");

$personal = new Personal();
$data = $personal->Consultar();

$areas = new Areas();
$datos = $areas->Consultar();

?>

<!DOCTYPE html>
<html lang="en">
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
			<CENTER><h1>JEFE DE AREA</h1></CENTER
>		<form action="controllers/jefe_area.controller.php" method="POST" role="form">
			<legend>Completa el formulario</legend>
		
			<div class="form-group">
				<label for="">Persona</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">Select</option>

					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					 <option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre']. " " . $fila['apellidos'];?></option>
					<?php } ?>

				</select>
			</div>
			<div class="form-group">
				<label for="">Area</label>
				<select name="id_areas" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					 <option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
					<?php } ?>

				</select>
			</div>

			<button type="submit" class="btn btn-primary">enviar</button>
          
		</form>
		</div>
	</div>
</body>
</html>