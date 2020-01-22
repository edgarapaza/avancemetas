<?php
session_start();
if(isset($_SESSION['personal'])){
	echo "Codigo" . $_SESSION['personal'];

	require_once "../../models/Persona.class.php";
	$persona = new Persona();
	$valor = $persona->MostrarPersona(28);
	echo $valor['personal'];



include "header.php";
 ?>

	<header class="container">
		<h1>Personal</h1>
	</header>

	<div class="container">
		<section>
			<h2>Seccion</h2>
		</section>
		<aside>aside</aside>
	</div>
	<footer class="container">

	</footer>
</body>
</html>

<?php
}else{
	header("Location: ../../index.php");
}
 ?>
