<?php
include "header.php";
include("./models/oficinas.model.php");
include("./models/metas.model.php");
$oficinas = new Oficinas();
$metas = new Metas();
$data = $oficinas->Consultar();
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
				<h1 class="h3 mb-4 text-gray-800">Listado de Sub Gerencias Creadas</h1>
				
				<table class="table">
					<thead>
						<tr>
							<th>Num.</th>
							<th>Nombre Sub Gerencias</th>
							<th>Id meta</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						
						<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
							
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php //echo $fila['id'];
								echo $fila['nomsubger']; ?>
								
							</td>
							<td></td>
							<td>
								<a href="#" id="#cambiarOficina" class="btn btn-info btn-sm" onclick="CambiarDatosOficina(<?php echo $fila['id'];?>)">Cambiar</a>
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
<div id="caja">
	<div class="container section">
		
	</div>
</div>
<script>
	function CambiarDatosOficina(dato) {
		var ventana1 = window.open('oficinasCambiar.php?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>
<?php include "footer.php"; ?>