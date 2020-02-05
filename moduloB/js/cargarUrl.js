$(document).ready(function(){

	
	$("#agregar_responsabilidades").click(function(){
		$("#cuerpo").load("./responsabilidades.php");
	});

	$("#agregar_metas").click(function(){
		$("#cuerpo").load("./metas.php");
	});

	$("#agregar_reporte").click(function(){
		$("#cuerpo").load("./reportes.php");
	});
	$("#estadisticas_oficinas").click(function(){
		$("#cuerpo").load("./estadisticas_oficinas.php");
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
		   META
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
	$("#listaReportes").click(function(){
		$("#cuerpo").load("./listaReportes.php");
	});
	$("#nuevoReporte").click(function(){
		$("#cuerpo").load("./reportes.php");
	});


	/**********************************
		   ESTADISTICAS DE OFICINA
	**********************************/
	$("#listaEstadisticas").click(function(){
		$("#cuerpo").load("./listaEstadisticas.php");
	});
});

