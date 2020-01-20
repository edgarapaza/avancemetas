<?php
session_start();
if(isset($_SESSION['total']))
{
	include_once "header.php";
 ?>

	<section class="container">
		<h2>Panel Administrator</h2>
		<div class="row">
			<p>Zona Asignacion de tareas</p>
			<a href="listadoActividades.php" class="waves-effect waves-light btn"><i class="material-icons left">book</i>Listado Tareas</a>

			<a href="asignarTareas.php" class="waves-effect waves-light btn"><i class="material-icons left">check</i>Asignar Tareas</a>
		</div>
		<div class="row">
			<p>Zona Personal</p>
			<a href="nuevoPersonal.php" class="blue darken-3 btn"><i class="material-icons left">person</i>Nuevo Personal</a>
			<a href="operacionesPersonal.php" class="blue darken-1 btn"><i class="material-icons left">person</i>Administracion Personal</a>
		</div>
	</section>

<?php
include_once "footer.php";
}
else{
	header("Location: ../index.php");
}
 ?>