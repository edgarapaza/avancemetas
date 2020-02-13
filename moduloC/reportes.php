<?php
session_start();

if(!empty($_SESSION['personal']))
{
	include("./models/reportes.model.php");
	include("../moduloB/models/acciones.model.php");

	$reportes = new Reportes();
	$idpersonal = $_SESSION['personal'];
	$data = $reportes->MostrarReportes($idpersonal);

	$acciones = new Acciones();

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
						<div id="cambiar" value="<?php echo $fila['id_acciones'];?>;"> </div>
					</td>
					
					<td>
							<a href="#" onclick="GuardarDatos(<?php echo $fila['id_acciones'];?>, <?php echo $idpersonal;?> );" id="btnGuardar" class="btn btn-warning">Guardar</a>
					
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

	function GuardarDatos(accion, idpersonal){
		var idaccion = accion;
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
	//
	
</script>

<?php 
}else{
	header("Location: ../index.html");
} ?>