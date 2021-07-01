<?php
session_start();

if(!empty($_SESSION['personal']))
{
	$i = 1;
	require 'models/acciones.model.php';
	$acciones = new Acciones();
	$id_personal = $_SESSION['personal'];
	$data = $acciones->MostrarAcciones( $id_personal);
	

?>

<div class="container">

	<form action="" id="reportes-form" method="post">
	
		<div id="mensaje"></div>

		<table class="table">
			<thead>
				<tr>
					<th>Num.</th>
					<th>Acciones/Actividades</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
						
				?>
				<tr>
					<td><?php echo $i;?></td>

					<td><?php echo $fila['nomb_actividad']; ?> </td>
					<td><?php echo $fila['unidad_medida']; ?> </td>
					<td>
						<input type="text" name="cantidad" id="cantidad" class="" placeholder="cantidad">

						<input type="text" name="id_acciones" value="<?php echo $fila['id_acciones']; ?>">
						<input type="text" name="id_personal" value="<?php echo $_SESSION['personal']; ?>">
						
					</td>
					
					<td>
						<button id="btn<?php echo $fila['id_acciones'];?>" onclick="GuardarDatos(<?php echo $fila['id_acciones'];?>, <?php echo $id_personal;?> );"  class="btn btn-primary"  type="button">Guardar</button>
					</td>
				</tr>

				<?php } ?>
			
			</tbody>
		</table>
	
	</form>
</div>


<script>
	/*var idaccion;
	function CambiarDatosReportes(dato) {
		var ventana1 = window.open('updateReportes.php?idreportes='+dato,"MsgWindow", "width=600,height=500");
	}*/

		var idaccion = 0;
	
	function GuardarDatos(accion, idpersonal){

		console.log("Dentro");
		idaccion = accion;
		var new_id = "cantidad"+accion;
		var boton = "btn"+accion;
		var cantidad_real = document.getElementById(new_id).value;
		var miboton = document.getElementById(boton);

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
					miboton.setAttribute("disabled","true");
					miboton.innerHTML = "Guardado";

					miboton=document.getElementById(boton);
                    miboton.style.backgroundColor="#D8BFD8";
					miboton.style.color="#8B008B";
					miboton.style.font="oblique bold";
					miboton.style.border="#8B008B solid 1px";
					
				},
				error: function(err){
					$("#mensaje").html(err);
				}
			});
		
	}
      	
</script>

<?php 
}else{
	header("Location: ../index.html");
} ?>