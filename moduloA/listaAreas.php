<?php 
include "header.php";
include("../moduloA/models/areas.model.php");
include("./models/metas_areas.model.php");


$metas = new MetasAreas();

$areas = new Areas();
$data = $areas->Consultar();

$i = 1;
?>
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Blank</h1>
          <h2>Lista de Areas</h2>
			<table class="table table-striped">
				
				<thead>
					<tr>
						<th>Num.</th>
						<th>Nombre</th>
						<th>Metas</th>
						<th>Descripcion</th>
						<th>Sub Gerencia</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						<td>
							<?php 
								
								$datameta = $metas->MostrarMetaAreas($fila['id_metas']);
								printf(" %s ",$datameta['nombre']); 
							?>
						</td>
						<td><?php echo $fila['descripcion']; ?></td>
						<td><?php 
							$office = $areas->DatosDireccionOficina($fila['idsubgerencia']);
							echo $office['sigla'];
						?></td>
						
						<td>
							<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosAreas(<?php echo $fila['id_areas'];?>)"><i class="material-icons">how_to_reg</i></a>

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
	function CambiarDatosAreas(dato) {

		window.open('updateAreas.php?id_areas='+dato,"MsgWindow", "width=600,height=500");
	}
</script>

<?php include "footer.php"; ?>