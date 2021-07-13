<?php
require("../moduloA/models/personal.model.php");
require("../moduloA/models/oficinas.model.php");
require("../moduloA/models/areas.model.php");
$idpersonal = $_REQUEST['idpersonal'];
$personal = new Personal();
$datos = $personal->MostrarPersonalUno($idpersonal);
$areas = new Areas();
$data  = $areas->Consultar();
$oficinas = new Oficinas();
$data1 = $oficinas->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<h1>Actualizar datos de Personal</h1>
				<form action="controllers/personalUpdate.controller.php" method="POST" role="form">
					<legend>Completa el formulario</legend>
					<input type="hidden" name="id_personal" value="<?php echo $idpersonal;?>">
					<div class="form-group">
						<label for="" type="text">Nombre</label>
						<input type="text" class="form-control" id="" name="nombre" value="<?php echo $datos ['nombre'];?>" placeholder="nombre" >
					</div>
					<div class="form-group">
						<label for="">Apellidos:</label>
						<input type="text" class="form-control" id="" name="apellidos" value="<?php echo $datos['apellidos'];?>"  placeholder="apellidos">
					</div>
					
					<div class="form-group">
						<label for="">telefono:</label>
						<input type="text" class="form-control" id="" name="telefono"  value="<?php echo $datos['telefono'];?>" placeholder="telefono">
					</div>
					<div class="form-group">
						<label for="">Fecha:</label>
						<input type="date" class="form-control" id="" name="fecha_nac" value="<?php echo $datos['fecha_nac'];?>"  placeholder="fecha">
					</div>
					<div class="form-group">
						<label for="">email:</label>
						<input type="text" class="form-control" id="" name="email" value="<?php echo $datos['email'];?>"  placeholder="email">
					</div>
					
					<div class="form-group">
						<label for="">DNI:</label>
						<input type="text" class="form-control" id="" name="dni"   value="<?php echo $datos['DNI'];?>"  placeholder="foto">
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar cambios</button>
					
				</form>
			</div>
		</div>
	</div>
</div>