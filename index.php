<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Personal</title>
</head>
<body>
	<header class="container">
		<div class="col-md-12">
			<h1>Login de Ingreso a Reportes de Avance Diarios</h1>
		</div>
	</header>
	<br>
<div class="container">
	<section class="row">
		<div class="col-xs-12 col-sm-6 col-md-8 ">
	  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

	  	<div class="col-xs-12 col-sm-6 col-md-4 login">
	  		<h3>Ingresar al sistema de Reportes:</h3>
		  	<form action="controllers/ValidarController.php" method="post">
		  		<table class="table">
		  			<tr>
		  				<td>Usuario:</td>
		  				<td><input type="text" name="usuario" placeholder="Nombre de usuario" required ='required' class="form-control" /></td>
		  			</tr>
		  			<tr>
		  				<td>Contraseña:</td>
		  				<td><input type="password" name="clave" placeholder="Contraseña" required ='required' class="form-control" /></td>
		  			</tr>
		  			<tr>
		  				<td></td>
		  				<td><button type="submit" class="btn btn-primary">Ingresar</button></td>
		  			</tr>
		  		</table>

				<span><?php echo @$_REQUEST['error']; ?></span>
			</form>
	  	</div>



	</section>
</div>
</body>
</html>