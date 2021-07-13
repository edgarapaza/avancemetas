<?php
include "header.php";
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Registro de Metas</h2>
				
				<form action="controllers/metas.controller.php" method="POST" role="form">
					
					<div class="form-group">
						<label for="">Nombre Metas:</label>
						<input type="text" class="form-control" id="" name="nombre_meta" placeholder="">
					</div>
					<div class="form-group">
						<label for="">Programado:</label>
						<input type="text" class="form-control" id="" name="programado" placeholder="">
					</div>
					<div class="form-group">
						<label for="">Frecuencia:</label>
						<select name="frecuencia" id="frecuencia" class="form-control">
							<option value="0">[Seleccionar]</option>
							<option value="Diario">Diario</option>
							<option value="Semanal">Semanal</option>
							<option value="Mensual">Mensual</option>
							<option value="Por horas">Por Horas</option>
							<option value="Anual">Anual</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="">Unidad de Medida:</label>
						<input type="text" class="form-control" id="" name="unidad_medida" placeholder="">
					</div>
					<button type="submit" class="btn btn-primary">enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php include "footer.php"; ?>