<?php

require("../moduloA/models/personal.model.php");
require("../moduloA/models/oficinas.model.php");
require("../moduloA/models/areas.model.php");

$idpersonal = $_REQUEST['idpersonal'];

$personal = new Personal();
$datos = $personal->MostrarPersonalUno($idpersonal);

$areas = new Areas();
$data  = $areas->Consultar();

$oficinas = new Oficinas();
$data1 = $oficinas->Consultar();
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
			<CENTER><h1>Actualizar datos de Personal</h1></CENTER>
			<form action="controllers/personal.controller.php" method="POST" role="form">
			<legend>Completa el formulario</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" id="" name="nombre" value="<?php echo $datos['nombre'];?>" placeholder="nombre" >
			</div>
			<div class="form-group">
				<label for="">Apellidos:</label>
				<input type="text" class="form-control" id="" name="apellidos" value="<?php echo $datos['apellidos'];?>"  placeholder="apellidos">
			</div>
			<div><label>sexo</label>
			<div id="gender" class="btn-group" data-toggle="buttons">
            <label class="btn btn-default" data-toggle-class="	btn-primary" value="<?php echo $datos['sexo'];?>"  data-toggle-passive-class="btn-default">
				<input type="radio" name="sexo" value="masculino"> &nbsp; Masculino &nbsp;
			</label>
			<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
				<input type="radio" name="sexo" value="femenino"> Femenino
			</label>
			</div>
			</div>
		
			<div class="form-group">
				<label for="">telefono:</label>
				<input type="text" class="form-control" id="" name="telefono"  value="<?php echo $datos['telefono'];?>" placeholder="telefono">
			</div>
			<div class="form-group">
				<label for="">fecha de nacimiento:</label>
				<input type="date" class="form-control" id="" name="fecha_nacimiento" value="<?php echo $datos['fecha_nac'];?>"  placeholder="fecha_nac">
			</div>
			<div class="form-group">
				<label for="">email:</label>
				<input type="text" class="form-control" id="" name="email" value="<?php echo $datos['email'];?>"  placeholder="email">
			</div>
			<div class="form-group">
				<label for="">foto:</label>
				<input type="file" class="form-control" id="" name="foto"   value="<?php echo $datos['foto'];?>"  placeholder="foto">
			</div>

			<div class="form-oto for=">
				<label for="">Areas:</label>
				<select name="id_areas" id="" class="form-control">
					<option value="<?php echo $datos['id_areas'];?>" selected="selected">Select</option>
						<?php 
							while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {			
					    ?>
					<option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
								<?php } ?>
				</select>
			</div>

			<div class="form-oto for="> <label>Oficinas:</label>
				<select name="id" id="" class="form-control">
					<option value="0" selected="selected">Select</option>
						<?php 
							 while ($fila = $data1->fetch_array(MYSQLI_ASSOC)) {					 ?>

								 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre_of'];?></option>
								<?php } ?>
							</select>
			</div>
				
			<button type="submit" class="btn btn-primary">enviar</button>
    

		</form>
		</div>
	</div>
	
</body>
</html>