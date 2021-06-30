<?php
include "header.php";
include("./models/reportes.model.php");
include("./models/acciones.model.php");
include("./models/personal.model.php");

$reportes = new Reportes();
$data = $reportes->Consultar();

$acciones = new Acciones();
$personal = new Personal();

$i = 1;

?>
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<!-- PAGE CUERPO -->
          	<h1 class="h3 mb-4 text-gray-800">Listado de Acciones</h1>
          	<table class="table table-striped">
				<thead>
					<tr>
						<th>Num.</th>
		
					<th>Id Acciones</th>
					<th>Id Personal</th>
					<th>Fecha Reporte</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					
					<td>
						<?php 
						 
						$dataacciones = $acciones->MostrarAcciones($fila['id_acciones']);
						printf(" %s ",$dataacciones['nomb_actividad']); 
						?>
						
					</td>
					<td>
						<?php 
						 
						$datapersonal = $personal->MostrarPersonalUno($fila['id_personal']);
						printf(" %s ",$datapersonal['nombre']." ".$datapersonal['apellidos']); 
						?>
						
					</td>

					<td><?php echo $fila['f_reportes']; ?></td>

					<td>
						<?php 
						 
						$fila['id_reportes'];
						printf(" %s ",$fila['cantidad']); 
						?>
						
					</td>
					
					<td>
						
						 <!--<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosReportes(<?php echo $fila['id_reportes'];?>)"><i class="material-icons">Cambiar</i></a>-->

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
    </div>
  </div>

<script>
	function CambiarDatosReportes(dato) {
		var ventana1 = window.open('updateReportes.php?idreportes='+dato,"MsgWindow", "width=600,height=500");
	}
</script>
<?php include "footer.php"; ?>