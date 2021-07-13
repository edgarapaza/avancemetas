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
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
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