<?php
require("../moduloA/models/metas.model.php");
require("../moduloA/models/institucion.model.php");


$metas = new Metas();
$data = $metas->Consultar();
$institucion = new Institucion();
$data = $institucion->Consultar();


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
	<CENTER><h1>OFICINAS</h1></CENTER>
		<form action="controllers/oficinas.controller.php" method="POST" role="form">
			<legend>Registro de Oficinas</legend>

		
			<div class="form-group">
				<label for="">Nombre Oficina:</label>
				<input type="text" class="form-control" id="" name="nombre_of" placeholder="Nombre Oficina">
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
				<label for="">Institucion:</label>
				<select name="id_institucion" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_institucion']; ?>"><?php echo $fila['nombre_inst']. "-" . $fila['programado'];?></option>
					<?php } ?>
				</select>
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
</body>
</html>