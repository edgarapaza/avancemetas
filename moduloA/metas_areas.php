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
				<h2 class="content-row-title">METAS AREAS</h2>
				
				<form action="" method="POST" role="form">
					<legend>Registro de Metas Areas</legend>
					<div class="form-group">
						<label for="">Metas:</label>
						<select name="idmetas" id="" class="form-control">
							<option value="0" selected="selected">Select</option>}
							option
						</select>
					</div>
					<div class="form-group">
						<label for="">Areas:</label>
						<select name="idareas" id="" class="form-control">
							<option value="0" selected="selected">Select</option>}
							option
						</select>
					</div>
					<div class="form-group">
						<label for="">Fecha Reporte:</label>
						<input type="date" class="form-control" id="" name="fecha_reporte" placeholder="Fecha Reporte">
					</div>
					<div class="form-group">
						<label for="">Cantidad Avance:</label>
						<input type="text" class="form-control" id="" name="cantidad_avance" placeholder="Cantidad Avance">
					</div>
					<button type="submit" class="btn btn-primary">enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>