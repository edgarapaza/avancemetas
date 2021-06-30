<?php
include "header.php";

session_start();

if(!empty($_SESSION['id_personal']))
{
	$i = 1;
	require 'models/acciones.model.php';
	$acciones = new Acciones();
	$data = $acciones->MostrarAccionesUno($_SESSION['id_personal']);
?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<!-- PAGE CUERPO -->

          	<h1 class="h3 mb-4 text-gray-800">Reportes</h1>
          	<form action="" id="reportes-form" method="post">
	<div id="caja"  > 
          	<table class="table table-striped">
				<thead>
					<tr>
					<th>Num.</th>
					<th>Acciones/Actividades</th>
					<th>Unidad de Medida</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				</tr>

				</thead>
				<tbody>
				<?php
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
						
				?>
				<tr>
					<td>
						<?php echo $i;?>

						<input type="hidden" name="id_accion" value="<?php echo $fila['id_acciones']; ?>">
						<input type="hidden" name="id_personal" value="<?php echo $_SESSION['id_personal']; ?>">						
					</td>

					<td>
						<?php echo $fila['nomb_actividad']; ?> 
				   </td>

					<td>
						<?php echo $fila['unidad_medida']; ?>
					</td>
					<td>
						<input type="number" name="cantidad" id="cantidad" class="" placeholder="cantidad">
						
					</td>
					
					<td><button type="button" class="btn btn-primary">Enviar</button></td>
				</tr>

				<?php } ?>
			
			</tbody>
			</table>
		</div>
	</form>


	
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="assets/js/core/jquery.min.js"></script>
<script>


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
<?php include "footer.php"; ?>