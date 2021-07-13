<?php
include("./models/metas.model.php");
$metas = new Metas();
$idmeta = $_REQUEST['idmeta'];
$office = $metas->MostrarMetaOficina($idmeta);
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<form action="controllers/cambiarNombreMeta.controller.php" method="POST" role="form">
					<legend>Cambiar Datos de Metas: </legend>
					<div class="form-group">
						<input type="hidden" value="<?php echo $idmeta;?>" name="idmeta">
						<label for="">Nombre Metas:</label>
						<input type="text" class="form-control" id="" value="<?php echo $office['nombre_meta'];?>" name="nombre_meta" placeholder="Nombre Meta">
						
						<label>Programado</label>
						<input type="text" class="form-control" id="" value="<?php echo $office['programado'];?>" name="programado" placeholder="Programado Meta">
						<label>Unidad de medida</label>
						<input type="text" class="form-control" id="" value="<?php echo $office['unidad_medida'];?>" name="unidad_medida" placeholder="Unidad de Medida">
					</div>
					
					<button type="submit" class="btn btn-primary">enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>