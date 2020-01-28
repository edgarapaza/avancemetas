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
			<CENTER><h1>METAS</h1></CENTER>
		<form action="../moduloA/controllers/metas_controller.php" method="POST" role="form">
			<legend>Registro de Metas</legend>

			<div class="form-group">
				<label for="">Nombre Metas:</label>
				<input type="text" class="form-control" id="" name="nombre_meta" placeholder="Nombre Metas">
			</div>
			<div class="form-group">
				<label for="">Programado:</label>
				<input type="text" class="form-control" id="" name="programado" placeholder="Programado">
			</div>
			
			<div class="form-group">
				<label for="">Unidad de Medida:</label>
				<input type="text" class="form-control" id="" name="unidad_medida" placeholder="Unidad de Medida">
			</div>
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>
		</div>
	</div>
</body>
</html>