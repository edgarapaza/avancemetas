<?php
include("./models/login.model.php");

$login = new Login();
$data = $login->ultimoRegistro();

$siguiente = $data[0]+1;
echo $siguiente;

$idpersonal = $_REQUEST['idpersonal'];

echo "id personal: ".$idpersonal;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">
<div class="container">
	<h3>Crear Acceso</h3>
	<form action="">
		<label for="username">Nombre de Usuario:</label>
		<input type="text" name="username" placeholder="User Name" class="form-control">

		<label for="password">Password:</label>
		<input type="text" name="password" placeholder="Contraseña" class="form-control">

		<label for="password">Nivel:</label>
		<select name="nivel" id="niel" class="form-control">
			<option value="0" selected="selected">[Seleccione]</option>
			<option value="3">Trabajador</option>
			<option value="2">Jefe de Area</option>
			<option value="1">Administrador</option>
		</select>

		<button class="btn">Guardar</button>

	</form>
</div>