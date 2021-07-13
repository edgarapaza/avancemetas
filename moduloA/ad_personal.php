<?php
session_start();
//if(isset($_SESSION["administrator"]))
//{
include "header.php";
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				personal
				<form action="controllers/ad_personal.controller.php" method="POST" role="form">
					<legend>Completa el formulario</legend>
					
					<div class="form-group">
						<label for="">profesion</label>
						<input type="text" class="form-control" id="" name="profesion" placeholder="profesion">
					</div>
					<div class="form-group">
						<label for="">tiempo de servicio:</label>
						<input type="text" class="form-control" id="" name="tiempo_servicio" placeholder="tiempos_servicio">
					</div>
					<div class="form-group">
						<label for="">condicion:</label>
						<input type="text" class="form-control" id="" name="condicion" placeholder="condicion">
					</div>
					<div class="form-group">
						<label for="">seguro social:</label>
						<input type="text" class="form-control" id="" name="seguro_social" placeholder="seguro_social">
					</div>
					<div class="form-group">
						<label>Grupo sanguineo:</label>
						<input type="text" class="form-control" id="" name="grupo_sanguineo" placeholder="grupo_sanguineo">
					</div>
					<div class="form-group">
						<label for="">fecha de ingreso:</label>
						<input type="date" class="form-control" id="" name="f_ingreso" placeholder="fecha_ingreso">
					</div>
					<div class="form-group">
						<label for="">fecha de deceso:</label>
						<input type="date" class="form-control" id="" name="f_deceso" placeholder="fecha_deceso">
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>