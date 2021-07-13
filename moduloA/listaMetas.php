<?php
include("./models/metas.model.php");
$meta = new Metas();
$data = $meta->Consultar();
$i = 1;
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<table class="table">
					<thead>
						<tr>
							<th>Num.</th>
							<th>Nombre Meta</th>
							<th>Programado</th>
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
							echo $fila['nombre_meta']; ?></td>
							<td>
								<?php
									echo $fila['programado'];
								?>
							</td>
							<td>
								<?php
									echo $fila['frecuencia'];
								?>
							</td>
							<td>
								<?php
								
								echo $fila['unidad_medida'];
								?>
							</td>
							<td>
								
								<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosMeta(<?php echo $fila['id_metas'];?>)"><i class="material-icons">how_to_reg</i></a>
								
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