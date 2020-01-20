<?php

session_start();
if(isset($_SESSION['personal']))
{
	include "header.php";
?>

	<div class="container">
		<header class="row">
				<h2 class="col-md-12">Zona de personal</h2>
		</header>
	

		<div class="row">
			<h3 class="text-center">Reporta tu avance de hoy</h3>
		</div>
		<div class="row">
			<a href="./listado.php" class="btn">Reportar ingresos diarios</a>
			<a href="./atencionUsuario.php" class="btn">Nuevos usuarios</a>
		</div>
		
		<div class="row">
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
			

<?php
	include "footer.php";
}else{
	header("Location: ../index.php");
}
 ?>
