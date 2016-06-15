<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Personal</title>
</head>
<body style="background:#EFEFEF">
	<div class="col-md-12 text-center bg-primary">
		<img src="img/arp_logo_mini.png"><h1 style="text-transform:uppercase" class="">Reportes de Avance Diario</h1>
	</div>
<div class="espacio"></div>
<div class="container">
	<section class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
		  	<h3 class="text-center">LOGIN</h3>
			 	<form action="controllers/ValidarController.php" method="post">
			  		<table class="table table-responsive">
	                	<tr class="text-right"><td>Usuario:</td><td><input type="text" name="usuario" placeholder="Nombre de usuario" required ='required' class="form-control" /></td></tr>
	               		<tr class="text-right"><td>Contraseña:</td><td><input type="password" name="clave" placeholder="Contraseña" required ='required' class="form-control" /></td></tr>
			  			<tr>
			  				<td colspan="2"><button type="submit" class="btn btn-primary btn-block"><h10>Ingresar</h10></button></td>
			  			</tr>
			  		</table>
					<span><?php echo @$_REQUEST['error']; ?></span>
				</form>
	  	</div>
<!--        <div class="col-xs-12 col-sm-6 col-md-8 ">
	  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div> -->
	</section>
</div>
</body>
</html>