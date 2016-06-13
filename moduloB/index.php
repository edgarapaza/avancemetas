<?php
session_start();
if(isset($_SESSION['personal'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta mane="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Personal</title>
</head>
<body>
	index personal
	<div class="container">
		<div class="row">
			<a href="views/index.php" class="btn btn-success">Reportar ingresos diarios</a>
		</div>
	</div>
</body>
</html>
<?php
}else{
	header("Location: ../index.php");
}
 ?>
