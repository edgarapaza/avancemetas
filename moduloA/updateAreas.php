<?php
require("../moduloA/models/areas.model.php");
require("../moduloA/models/metas.model.php");
require("../moduloA/models/oficinas.model.php");
$area = new Areas();
$idareas = $_REQUEST['id_areas'];
$row = $area->MostrarAreas($idareas);
$metas = new Metas();
$data = $metas->Consultar();
$oficinas = new Oficinas();
$office = $oficinas->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<form action="controllers/cambiarAreas.controller.php" method="POST" role="form">
					<legend>Cambiar Datos de Areas: </legend>
					<div class="form-group">
						<input type="hidden" value="<?php echo $idareas;?>" name="id_areas">
						<label for="">Nombre Area:</label>
						<input type="text" class="form-control" id="" value="<?php echo $row['nombre'];?>" name="nombre" >
					</div>
					<div class="form-group">
						<label for="">Descripcion:</label>
						<input type="text" class="form-control" id=""  value="<?php echo $row['descripcion'];?>" name="descripcion" >
					</div>
					<button type="submit" class="btn btn-primary">GUARDAR</button>
				</form>
			</div>
		</div>
	</div>
</div>