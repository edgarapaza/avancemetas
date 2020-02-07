
$(document).ready(function(){

	$("#institucion").click(function(){
		$("#cuerpo").load("./institucion.php");
	});

	$("#estadisticas_oficinas").click(function(){
		$("#cuerpo").load("./estadisticas_oficinas.php");
	});

	$("#estadisticas_areas").click(function(){
		$("#cuerpo").load("./estadisticas_areas.php");
	});

	
	/*******************************
		   REPORTES
	********************************/
	$("#reportes").click(function(){
		$("#cuerpo").load("./Reportes.php");
	});

});