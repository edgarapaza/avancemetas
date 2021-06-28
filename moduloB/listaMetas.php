<?php
include "header.php";
include("./models/metas.model.php");

$meta = new Metas();
$data = $meta->Consultar();

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
					<th>Nombre Meta</th>
					<th>Cantidad</th>
					<th>Frecuencia</th>
					<th>Unidad de medida</th>
					</tr>
				</thead>
				<tbody>
			<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php //echo $fila['id'];
					          echo $fila['nombre']; ?></td>
					<td>
						<?php 
							echo $fila['cantidad'];
						 ?>
					</td>
					<td>
						<?php 
							echo $fila['frecuencia'];
						 ?>
					</td>
					<td>
						<?php 
						 
						echo $fila['unidadmedida'];
						?>
					</td>
					<td>
						
						 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosMeta(<?php echo $fila['idmetas'];?>)"><i class="material-icons">Modificar</i></a>
						
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
	function CambiarDatosMeta(dato) {
		var ventana1 = window.open('updateMetas.php?idmeta='+dato,"MsgWindow", "width=600,height=500");
	}
</script>

<?php include "footer.php"; ?>