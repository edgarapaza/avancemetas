<?php
require("../moduloA/models/jefe_area.model.php");

$cargo = new JefeArea();
$data = $cargo->Consultar();
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
			
		<CENTER><h1>CARGO</h1></CENTER>
		<form action="controllers/cargos.controller.php" method="POST" role="form">
			<legend>Registro de Cargos</legend>
            <div class="form-group">
				<label for="">Jefe de Area:</label>

				<select name="id_jefearea" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_jefearea']; ?>"><?php echo $fila['id_jefearea'];?></option>
					<?php } ?>
				</select>

			</div>
		-
			<div class="form-group">
				<label for="">Nombre Cargo:</label>
				<input type="text" class="form-control" id="" name="nombre_cargo" placeholder="Nombre Cargo">
			</div>
			<div class="form-group">
				<label for="">Personal:</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_jefearea']; ?>"><?php echo $fila['id_personal'];?></option>
					<?php } ?>
				</select>
			</div>
		
			<div class="form-group">
				<label for="">Fecha Inicio de Cargo:</label>
				<input type="date" class="form-control" id="" name="f_inicio_cargo" placeholder="Fecha Inicio de Cargos">
			</div>
			<div class="form-group">
				<label for="">Fecha Fin de Cargo:</label>
				<input type="date" class="form-control" id="" name="f_fin_cargo" placeholder="Fecha Fin de Cargos">
			</div>
			<div class="form-group">
				<label for="">Documento:</label>
				<input type="text" class="form-control" id="" name="documento" placeholder="Documento">
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>		
		</div>
	</div>

	
</body>
</html>