<?php
session_start();
if(isset($_SESSION['total']))
{
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Administrator</title>
</head>
<body>
	<a href="../controllers/sessionClose.php">Salir</a>
	<header>
		<h2>Administrator</h2>
	</header>
	<section class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Menu</h3>
				<a href="controllers/listasControllers.php" class="btn btn-danger">Listado Tareas</a>
				<a href="controllers/asignarTareas.php" class="btn btn-info">Asignar Tareas</a>
			</div>
			<div class="col-md-4">
				Otro
			</div>
		</div>
	</section>
</body>
</html>

<?php
}else{
	header("Location: ../index.php");
}
 ?>