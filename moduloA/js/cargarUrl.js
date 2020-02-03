$(document).ready(function(){

	$("#institucion").click(function(){
		$("#cuerpo").load("./institucion.php");
	});

	$("#crear_cargos").click(function(){
		$("#cuerpo").load("./cargos.php");
	});

	$("#agregar_personal").click(function(){
		$("#cuerpo").load("./listaPersonal.php");
	});

	$("#agregar_metas").click(function(){
		$("#cuerpo").load("./metas.php");
	});

	$("#estadisticas_oficinas").click(function(){
		$("#cuerpo").load("./estadisticas_oficinas.php");
	});

	$("#estadisticas_areas").click(function(){
		$("#cuerpo").load("./estadisticas_areas.php");
	});

	
	/*******************************
		   OFICINAS
	********************************/
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

<<<<<<< HEAD


=======
>>>>>>> 952d5e607e071ad936eb1d8d2ee338f3eb5bd551
	/*******************************
		   PERSONAL
	********************************/
	$("#listadopersonal").click(function(){
		$("#cuerpo").load("./listaPersonal.php");
	});
	$("#nuevopersonal").click(function(){
		$("#cuerpo").load("./personal.php");
	});

	

});

