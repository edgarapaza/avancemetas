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
	<title>Personal</title>
</head>
<body>
	<h1>Agregar personal</h1>

</body>
</html>
<?php
}else{
	header("Location: ../index.php");
}
 ?>
