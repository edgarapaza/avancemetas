<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/jefe_area.model.php");

$personal = new Personal();
$data = $personal->Consultar();

$jefearea = new JefeArea();
$data1 = $jefearea->Consultar();
$jefeAreas = $jefearea->ConsultaJefeArea();
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
			<CENTER><h1>RESPONSABILIDADES</h1></CENTER>
		<form action="controllers/responsabilidades.controller.php" method="POST" role="form">
			<legend>Registro de Responsabiliades</legend>

			<div class="form-group">
				<label for="">Nombre Responsabliades:</label>
				<input type="text" class="form-control" id="" name="nomb_resp" placeholder="Nombre Responsabliades">
			</div>
			<div class="form-group">
				<label for="">Fecha Inicio de Responsabilidades:</label>
				<input type="date" class="form-control" id="" name="f_inicio_respo" placeholder="Fecha Inicio de Responsabiliades">
			</div>
			<div class="form-group">
				<label for="">Documento:</label>
				<input type="text" class="form-control" id="" name="documento" placeholder="Documento">
			</div>
			<div class="form-group">
				<label for="">Unidad de Medidad:</label>
				
				<select name="unidad_medida" class="form-control">
					<option value="0" selected="selected">[Seleccionar]</option>
					<option value="Unidad">Unidad</option>
					<option value="Metros Lineales">Metros Lineales</option>
					<option value="Moneda">Moneda</option>
					<option value="Porcentaje">Porcentaje</option>
										
				</select>
			</div>
			<div class="form-oto for=">
				<label for="">Personal:</label>
				<select name="id_personal" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					
					    ?>
					<option value="<?php echo $fila['id_personal']; ?>">
						<?php echo $fila['nombre'] ." ".$fila['apellidos']; ?>		
					</option>
								<?php } ?>
				</select>
			</div>
			<div>
				<label for="">Jefe de Area:</label>
				<select name="id_jefearea" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							while ($fila = $jefeAreas->fetch_array(MYSQLI_ASSOC)) {					
					    ?>
					<option value="<?php echo $fila['id_jefearea']; ?>">
						<?php 
						echo $fila['nombre']. " ". $fila['apellidos']. "(". $fila['id_jefearea'].")";?></option>
								<?php } ?>
				</select>
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
		</div>
	</div>
</body>
</html>