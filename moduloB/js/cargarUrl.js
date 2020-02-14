$(document).ready(function(){

	
	$("#agregar_acciones").click(function(){
		$("#cuerpo").load("./acciones.php");
	});

	$("#agregar_metas").click(function(){
		$("#cuerpo").load("./metas.php");
	});

	$("#agregar_reporte").click(function(){
		$("#cuerpo").load("./listaReportes.php");
	});
	$("#estadisticas_oficinas").click(function(){
		$("#cuerpo").load("./estadisticas_oficinas.php");
	});

	/*******************************
		   ACCIONES
	********************************/
	$("#listadoAcciones").click(function(){
		$("#cuerpo").load("./listaAcciones.php");
	});
	
	$("#nuevaAccion").click(function(){
		$("#cuerpo").load("./acciones.php");
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
		   REPORTES
	********************************/
	$("#reportes_avances").click(function(){
		$("#cuerpo").load("./reportes.php");
	});

	/**********************************
		   ESTADISTICAS DE OFICINA
	**********************************/
	$("#listaEstadisticas").click(function(){
		$("#cuerpo").load("./listaEstadisticas.php");
	});
	
});

