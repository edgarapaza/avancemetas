<?php
include "header.php";
require "./models/uniorganica.model.php";
$uniorg = new UnidadOrganica();
$data = $uniorg->Listado();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Crear una nueva Gerencia</h2>
				<h1 class="h3 mb-4 text-gray-800"></h1>
				<form action="controllers/gerencia.controller.php" method="POST" role="form">
					
					<div class="form-group">
						<label for="">Selecciona la Unidad Organica que depende</label>
						<select name="uniorganica" class="form-control">
							<option>[Seleccione]</option>
							<?php
							
							while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
							?>
							<option value="<?php echo $row['iduorg'];?>"><?php echo $row['nombreuo'];?></option>
							
							<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nombre de la Nueva Gerencia/Oficina:</label>
						<input type="text" class="form-control" id="nombre_gerencia" name="nombre_gerencia" placeholder="">
					</div>
					<div class="form-group">
						<label for="">Sigla:</label>
						<input type="text" class="form-control" id="sigla" name="sigla" placeholder="">
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>