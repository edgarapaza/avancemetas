
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
		   OFICINAS / GERENCIAS
	********************************/
	$("#listadoGerencia").click(function(){
		$("#cuerpo").load("./listagerencias.php");
	});
	$("#nuevaGerencia").click(function(){
		$("#cuerpo").load("./gerencia.php");
	});
	$("#milistado").click(function(){
		$("#cuerpo").load("./listaOficinas.php");
	});
	$("#nuevaOficina").click(function(){
		$("#cuerpo").load("./oficinas.php");
	});


	/*******************************
		   AREAS
	********************************/
	$("#listadoareas").click(function(){
		$("#cuerpo").load("./listaAreas.php");
	});
	$("#nuevaArea").click(function(){
		$("#cuerpo").load("./areas.php");
	});

	/*******************************
		   PERSONAL
	********************************/
	$("#listadopersonal").click(function(){
		$("#cuerpo").load("./listaPersonal.php");
	});
	$("#nuevopersonal").click(function(){
		$("#cuerpo").load("./personal.php");
	});


	/*******************************
		   RESPONSABILIDADES
	********************************/
	$("#listadoresponsabilidades").click(function(){
		$("#cuerpo").load("./listaResponsabilidades.php");
	});

	$("#nuevaResponsabilidad").click(function(){
		$("#cuerpo").load("./responsabilidades.php");
	});



	/*******************************
		   METAS
	********************************/
	$("#milistadoMetas").click(function(){
		$("#cuerpo").load("./listaMetas.php");
	});
	$("#nuevaMeta").click(function(){
		$("#cuerpo").load("./metas.php");
	});


	/*******************************
		   CARGOS
	********************************/
	$("#milistadoCargos").click(function(){
		$("#cuerpo").load("./listaCargos.php");
	});
	$("#nuevoCargos").click(function(){
		$("#cuerpo").load("./cargos.php");
	});
	$("#AsignarCargos").click(function(){
		$("#cuerpo").load("./asignacionPersonal.php");
	});
	$("#ListadoCargos").click(function(){
		$("#cuerpo").load("./listadoAsignacionPersonal.php");
	});

});
