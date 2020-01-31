<?php
require("../moduloA/models/areas.model.php");
require("../moduloA/models/oficinas.model.php");

$areas = new Areas();
$data = $areas->Consultar();

$oficinas = new Oficinas();
$data1 = $oficinas->Consultar()
?>


	<div class="container">

		
			<CENTER><h1>personal</h1></CENTER>
			<form action="controllers/personal.controller.php" method="POST" role="form">
			<legend>Completa el formulario</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" id="" name="nombre" placeholder="nombre">
			</div>
			<div class="form-group">
				<label for="">Apellidos:</label>
				<input type="text" class="form-control" id="" name="apellidos" placeholder="apellidos">
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
				<input type="text" class="form-control" id="" name="telefono" placeholder="telefono">
			</div>
			<div class="form-group">
				<label for="">fecha de nacimiento:</label>
				<input type="date" class="form-control" id="" name="fecha_nacimiento" placeholder="fecha_nac">
			</div>
			<div class="form-group">
				<label for="">email:</label>
				<input type="text" class="form-control" id="" name="email" placeholder="email">
			</div>
			<div class="form-group">
				<label for="">foto:</label>
				<input type="file" class="form-control" id="" name="foto" placeholder="foto">
			</div>

			<div class="form-group">
				<label for="">DNI:</label>
				<input type="text" class="form-control" id="" name="DNI" placeholder="DNI">
			</div>

			<button type="submit" class="btn btn-primary">enviar</button>
    

		</form>

	</div>
