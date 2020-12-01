<?php
require("../moduloA/models/areas.model.php");
require("../moduloA/models/oficinas.model.php");

$areas = new Areas();
$data = $areas->Consultar();

$oficinas = new Oficinas();
$data1 = $oficinas->Consultar()
?>


<div class="container">
		
	<h1>personal</h1>
		<form action="controllers/personal.controller.php" method="POST" role="form">
			<legend>Completa el formulario</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" id="" name="nombre" placeholder="">
			</div>
			<div class="form-group">
				<label for="">Apellidos:</label>
				<input type="text" class="form-control" id="" name="apellidos" placeholder="">
			</div>
			<div><label>sexo</label>
			<div id="gender" class="btn-group" data-toggle="buttons">
            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
			<input type="radio" name="sexo" value="masculino"> &nbsp; Masculino &nbsp;
			</label>
			<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
			<input type="radio" name="sexo" value="femenino"> Femenino
			</label>
			</div>
			</div>
		
			<div class="form-group">
				<label for="">telefono:</label>
				<input type="text" class="form-control" id="" name="telefono" placeholder="">
			</div>
			<div class="form-group">
				<label for="">fecha de nacimiento:</label>
				<input type="date" class="form-control" id="" name="fecha_nacimiento" placeholder="">
			</div>
			<div class="form-group">
				<label for="">email:</label>
				<input type="text" class="form-control" id="" name="email" placeholder="">
			</div>

			<div class="form-group">
				<label for="">DNI:</label>
				<input type="text" class="form-control" id="" name="dni" placeholder="">
			</div>

			<div class="form-group">
				<label for="">foto:</label>
			</div>
				<input type="file" id="fileinput" accept="image/x-png,image/gif,image/jpeg" />
				<div id="gallery"></div>

			<button type="submit" class="btn btn-primary">enviar</button>
    

		</form>

	</div>

	<script type="text/javascript">
		function MostrarImagen(){
			document.getElementById('fileinput').addEventListener('change', function(){
		    var file = this.files[0];
		    // This code is only for demo ...
		    console.log("name : " + file.name);
		    console.log("size : " + file.size);
		    console.log("type : " + file.type);
		    console.log("date : " + file.lastModified);
		}, false);
		}
	</script>
