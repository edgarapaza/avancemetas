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
	<header class="container text-center espacio"><h2>Panel Administrator</h2></header>
	<section class="container">
		<div class="row">
			<div class="col-md-12" style="background-color:#E5E5E5">
				<div class="text-center"><h3>Menu</h3></div>
				<div class="col-md-6 text-center"><a href="controllers/listasControllers.php" class="btn btn-danger btn-lg  btn-block">Listado Tareas</a></div>
				<div  class="col-md-6 text-center"><a href="controllers/asignarTareas.php" class="btn btn-info btn-lg btn-block">Asignar Tareas</a></div><div></div>
                
			</div>
		</div>
	</section>
</body>
<footer>
	<div class="text-center panel-footer navbar-fixed-bottom"><a href="../controllers/sessionClose.php" class="btn btn-danger"><h5><strong>SALIR</strong></h5></a></div>
</footer>
</html>

<?php
}else{
	header("Location: ../index.php");
}
 ?>