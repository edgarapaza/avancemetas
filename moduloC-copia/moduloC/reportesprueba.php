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
					<th>Fecha Reporte</th>
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
					<td><?php echo $fila['unidad_medida'];?></td>

					<td>
                        <input type="text" name="cantidad" id="cantidad" required="required" >
						
					</td>
					
					<td>
						
						<a href="controllers/reportes.controller.php?idpersonal=<?php echo $idpersonal;?>&idaccion=<?php echo $fila['id_acciones'];?>&cantidad=" onclick="Recibe(3);" id="btnGuardar" class="btn" >Guardar</a>
						
						<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosReportes(<?php echo $fila['id_reportes'];?>)"><i class="material-icons">how_to_reg</i></a>

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

	
	function CambiarDatosReportes(dato) {
		var ventana1 = window.open('updateReportes.php?idreportes='+dato,"MsgWindow", "width=600,height=500");
	}

	$(document).ready(function(){

			$("#btnGuardar").click(function Recibe(data){
				alert("Guardar");
				var idpersonal = $("#idpersonal").val();
				var cantidad = $("#cantidad").val();
				//var idaccion = dato;

				alert(data);

				$.ajax({
					url: 'controllers/reportes.controller.php',
					type: 'post',
					dataType: 'html',
					data: {
						id_personal : idpersonal,
						id_acciones : idaccion,
						cantidad   :  cantidad
					},
					success: function(res){
						$("#mensaje").html(res);

					},
					error: function(err){
						$("#mensaje").html(err);
					}
				});
		});
	});
	
</script>

<?php 
}else{
	header("Location: ../index.html");
} ?>