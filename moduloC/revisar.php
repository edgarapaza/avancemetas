<?php
include "header.php";
include("./models/reportes.model.php");
include("./models/acciones.model.php");
//include("./models/personal.model.php");

$reportes = new Reportes();
$data = $reportes->Consultar();
$acciones = new Acciones();
//$personal = new Personal();

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
					<th>Fecha Reporte</th>
					<th>Cantidad</th>
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
					
					<td><?php echo $fila['f_reportes']; ?></td>

					<td>
						<?php 
						 
						$fila['id_reportes'];
						printf(" %s ",$fila['cantidad']); 
						?>
						
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

<?php include "footer.php"; ?>