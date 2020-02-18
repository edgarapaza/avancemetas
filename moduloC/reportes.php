<?php
session_start();

if(!empty($_SESSION['personal']))
{
	include("./models/reportes.model.php");
	include("../moduloB/models/acciones.model.php");

	$reportes = new Reportes();
	$idpersonal = $_SESSION['personal'];
	$data = $reportes->MostrarReportes($idpersonal);
	/*
	$data1= $reportes->Consultarcant($cantidad);
	$acciones = new Acciones();*/

	$i = 1;

?>
<link rel="stylesheet" href="assets/css/material-dashboard.css">

<form action="" id="reportes-form" method="post">
	<div id="caja"  > Caja

	<div id="mensaje"></div>

	<div class="container section" >
		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Id Acciones</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<div id="cambiar" value="<?php echo $fila['id_acciones'];?>;"> </div>
					<td>
						<?php echo $i;
						 ?>
						<input type="hidden" name="idpersonal" id="idpersonal" value="<?php echo $idpersonal;?>">
						<input type="hidden" name="idacciones" id="idacciones" value="<?php echo $fila['id_acciones'];?>">
					</td>
					<td>
						<?php 
						 echo $fila['nomb_actividad'];
						?>
					</td>
					<td>
                        <input type="number" name="cantidad" id="cantidad<?php echo $fila['id_acciones'];?>" required="required" class="form-control">
						
					</td>

					
					<td>

							<a href="#" onclick="GuardarDatos(<?php echo $fila['id_acciones'];?>, <?php echo $idpersonal;?> );" id="btn<?php echo $fila['id_acciones'];?>" class="btn btn-warning"  type="hidden" >Guardar</a>
							

						<!-- <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosReportes(<?php// echo $fila['id_reportes'];?>)"><i class="material-icons">how_to_reg</i></a>-->
					</td>
				</tr>
			<?php
				$i++;
			}
			?>
			</tbody>
		</table>
	</div>
</div>
</form>

<script>

	/*var idaccion;
	function CambiarDatosReportes(dato) {
		var ventana1 = window.open('updateReportes.php?idreportes='+dato,"MsgWindow", "width=600,height=500");
	}*/

		var idaccion = 0;
	
	function GuardarDatos(accion, idpersonal){
		idaccion = accion;
		var new_id = "cantidad"+accion;
		var cantidad_real = document.getElementById(new_id).value;


		//var mensaje = idaccion+ " - " + cantidad_real +"  -  "+ idpersonal;
		
		$.ajax({
				url: 'controllers/reportes.controller.php',
				type: 'post',
				dataType: 'html',
				data: {
					//VARIABLE     VALOR (VARIABLE Y CLAVE)
					id_personal : idpersonal,
					id_acciones : idaccion,
					cantidad   :  cantidad_real
				},
				success: function(res){
					$("#mensaje").html(res);
					var i = document.createElement("img");
					i.setAttribute("src","images/check.jpg");
					i.setAttribute("width","30");
					
					var padre = document.getElementById("cambiar");
					padre.appendChild(i);

					document.getElementById('btnGuardar').onclick = function() { 
				    	document.getElementById('btnGuardar').disabled = true; 
					}; 

					/*document.getElementById('btnGuardar').onclick="this.href='javascript: void(0)';" */

					/*var btn1 = document.getElementById("btnGuardar");
					btn1.setAttribute("disabled","disabled");*/
					
				},
				error: function(err){
					$("#mensaje").html(err);
				}
			});


//en la tercera etapa se esta dando mejor funcionalidad al sistema para ello se esta utilizando ajax que hace que cargue màs rapido y no se refresque a cada rato 

		
	}
    
	//while(cantidad_real=0){

		/*let boton2 = document.getElementById('btn2');
	  boton2.addEventListener('click', function(){
			alert("Enviado:" + idaccion);

	});*/
//}
     //if(id_acciones>=0){

		let boton2 = document.getElementById('btn2');
		let boton3 = document.getElementById('btn3');
		let boton4 = document.getElementById('btn4');
		let boton5 = document.getElementById('btn5');
		let boton6 = document.getElementById('btn6');
		let boton7 = document.getElementById('btn7');
		let boton8 = document.getElementById('btn8');
		let boton9 = document.getElementById('btn9');
		let boton10 = document.getElementById('btn10');
		let boton11 = document.getElementById('btn11');
		let boton12 = document.getElementById('btn12');
		let boton13 = document.getElementById('btn13');
		let boton14 = document.getElementById('btn14');
		let boton15 = document.getElementById('btn15');




		boton2.addEventListener('click', function(){
			alert("Enviado satisfactoriamente :" + idaccion);
		
		});
			//onclick="CambiarDatosReportes";
			//this.disabled='disabled';

	    boton3.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});
			//salert ("hola" + idaccion);
	

	    boton4.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton5.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton6.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton7.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton8.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton9.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton10.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boto11.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton12.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton13.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton14.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	    boton15.addEventListener('click', function(){	
			alert("Enviado satisfactoriamente:" + idaccion);
			//this.disabled='disabled';
		});


	
	
</script>

<?php 
}else{
	header("Location: ../index.html");
} ?>