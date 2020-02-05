<?php
include("./models/login.model.php");

$login = new Login();
$data = $login->ultimoRegistro();

$codigoPersonal = $data[0]+1;

$idpersonal = $_REQUEST['idpersonal'];
?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div class="container">
	<h3>Crear Acceso</h3>
	<form action="controllers/login.controller.php" method="post">
		<label for="username">Nombre de Usuario:</label>
		<input type="text" name="codigo" value="<?php echo $codigoPersonal; ?>">
		<input type="text" name="idpersonal" value="<?php echo $idpersonal; ?>">
		<input type="text" name="username" placeholder="User Name" class="form-control">

		<label for="password">Password:</label>
		<input type="text" name="password" placeholder="Contraseña" class="form-control">

		<label for="password">Nivel:</label>
		<select name="nivel" id="nivel" class="form-control">
			<option value="0" selected="selected">[Seleccione]</option>
			<option value="3">Trabajador</option>
			<option value="2">Jefe de Area</option>
			<option value="1">Administrador</option>
		</select>

		<button type="submit" class="btn">Guardar</button>

	</form>
</div>