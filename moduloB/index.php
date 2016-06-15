<?php
session_start();
if(isset($_SESSION['personal'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
		    		<span class="sr-only"  aria-hidden="true">Menu</span>
		    		<span class="icon_bar"></span>
		    		<span class="icon_bar"></span>
		    		<span class="icon_bar"></span>
		    	</button>

		    	<a class="navbar-brand" href="../index.php">Area Informática</a>
		    </div>

		    <div class="collapse navbar-collapse" id="navbar-1">
			    <ul class="nav navbar-nav">
				    <li><a href="#">Inicio</a></li>
				    <li class="active"><a href="#">Reportes</a></li>
				    <li><a href="#">menu</a></li>
				    <li><a href="#">menu2</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				   	<li class="alert-danger"><a href="../controllers/sessionClose.php">Salir</a></li>
				</ul>
		    </div>

			</div>
		</nav>
	</div>
	<div class="container">
		<header class="row">
				<h2 class="col-md-12">Zona de personal</h2>
		</header>
	</div>
	<br>
	<div class="container">
		<div class="row navbar navbar-default">
			<div class="col-md-4">
				<aside class="alert alert-success">
					<h3 class="text-center">Reporta tu avance de hoy</h3>
					<hr>
					<a href="views/index.php" class="btn btn-success">Reportar ingresos diarios</a>
				</aside>
			</div>

			<div class="col-md-8">
				<h2>Nuevo cambio en la Gestión Pública</h2>
				<h3>Objetivo</h3>
				<p>
					El <strong>Diseño organizacional</strong> es el arte de organizar el
					trabajo y crear mecanismos de coordinación que faciliten la
					implementacion de la estrategia, el flujo de procesos y el
					relacionamiento entre las personas y la organización, con el
					fin de logar <em >productividad y competitividad.</em>
				</p>
				<h3>Justificación</h3>
				<p>
					La estructura organizacional representa la percepcion que tiene
					los miembros de la organización acerca de la cantidad de reglas,
					procedimientos, trámites y otras limitaciones a que se ven enfrentados
					en el desarrollo de su trabajo.
				</p>
				<p>
					Una estructura es la división del trabajo en actividades y sub actividades
					elementales reconoce dimensiones crítias tales como: funciones,
					cumplimiento de aquellas funciones necesarias para la consecucion de la misión
					plateadas por la organizacion (funciones de apoyo y de operación), productos,
					mercado, ect.  en la medida que las organizaciones crecen, desarrollan roles
					mas especializados y se difinen departamentos formados tambien por el criterio
					de especialización.
				</p>
			</div>
		</div>
	</div>

 	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>
<?php
}else{
	header("Location: ../index.php");
}
 ?>
