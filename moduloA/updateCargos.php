<?php
include("./models/cargos.model.php");
include "header.php";
$cargos = new Cargo();
$idcargos = $_REQUEST['idcargos'];
$office = $cargos->MostrarCargos($idcargos);
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<form action="controllers/cambiarNombreCargos.controller.php" method="POST" role="form">
					<legend>Cambiar Datos de Cargos: </legend>
					<div class="form-group">
						<input type="hidden" value="<?php echo $idcargos;?>" name="idcargos">
						
						<label for="">Nombre Cargos:</label>
						<input type="text" class="form-control" id="" value="<?php echo $office['nombre'];?>" name="nombre_cargo" placeholder="Nombre Cargos">
						
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar Cambios</button>
				</form>
			</div>
		</div>
	</div>
</div>