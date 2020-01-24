<?php
require("../models/metas.model.php");

$metas = new Metas();
$data = $metas->Consultar();

while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
	echo $fila['id_metas'];
	echo $fila['nombre_meta'];
	echo $fila['programado'];
	echo $fila['unidad_medida'];
	echo "<br>";
}
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
	<CENTER><h1>INSTITUCION</h1></CENTER
>		<form action="controllers/institucion.controller.php" method="POST" role="form">
			<legend>Completa el formulario</legend>
		
			<div class="form-group">
				<label for="">Nombre institucion</label>
				<input type="text" class="form-control" id="" name="nom_institucion" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Direccion:</label>
				<input type="text" class="form-control" id="" name="direccion" placeholder="direccion">
			</div>
			
			<div class="form-group">
				<label for="">telefono:</label>
				<input type="text" class="form-control" id="" name="telefono" placeholder="telefono">
			</div>
			<div class="form-group">
				<label for="">RUC:</label>
				<input type="text" class="form-control" id="" name="RUC" placeholder="RUC">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="email" class="form-control" id="" name="Email" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="">Pagina web:</label>
				<input type="text" class="form-control" id="" name="Pagina_web" placeholder="Pagina web">
			</div>
			<div class="form-group">
				<label for="">Fecha de creacion de la institucion:</label>
				<input type="date" class="form-control" id="" name="f_creacion_institucion" placeholder="Fecha de creacion de la institucion">
			</div>
			<div class="form-group">
				<label for="">Metas:</label>
				<select name="idmetas" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Numero de resolucion:</label>
				<input type="text" class="form-control" id="" name="N_resolucion" placeholder="Numero de resolucion">
			</div>
			<div class="form-group">
				<label for="">Fecha de creacion de datos:</label>
				<input type="date" class="form-control" id="" name="Fecha_creacion_datos" placeholder="Fecha de creacion de datos">
				
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
          
		</form>
</body>
</html>