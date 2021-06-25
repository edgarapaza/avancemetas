<?php
include "header.php";
require 'models/gerencia.model.php';

$gerencia = new Gerencias();
$datos = $gerencia->Consultar();


$i = 1;

?>



<script>
	function CambiarDatosOficina(dato) {
		var ventana1 = window.open('oficinasCambiar.php?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<!-- PAGE CUERPO -->
          	<h1 class="h3 mb-4 text-gray-800">Listado de Gerencias</h1>
          	<table class="table table-striped">
				<thead>
					<tr>
						<th>Num.</th>
						<th>Nombre Oficina</th>
						<th>Sigla</th>
						<th>Id meta</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>


				<?php while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {

					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php //echo $fila['id'];
						          echo $fila['nomgerencia']; ?>

						</td>
						<td><?php //echo $fila['id'];
						          echo $fila['sigla']; ?>

						</td>
						<td>
							<?php

							/*$datameta = $metas->MostrarMetaOficina($fila['id_metas']);
							printf("Meta: %s - Programado (%s)",$datameta['nombre_meta'], $datameta['programado']);*/
							?>

						</td>
						<td>

							 <a href="#" id="#cambiarOficina" class="btn btn-info btn-sm" onclick="CambiarDatosOficina(<?php echo $fila['id'];?>)">cambiar</a>


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