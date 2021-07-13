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
				<div id="mensaje"></div>
				<form action="" method="POST" role="form">
					
					<div class="form-group">
						<label for="">Selecciona la Unidad Organica que depende</label>
						<select name="uniorganica" id="uniorganica" class="form-control" required>
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
						<input type="text" class="form-control" id="nombre_gerencia" name="nombre_gerencia" placeholder="Nombre Gerencia" required>
					</div>
					<div class="form-group">
						<label for="">Sigla:</label>
						<input type="text" class="form-control" id="sigla" name="sigla" placeholder="Sigla" required>
					</div>
					
					<button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>

<script>
	$(document).ready(function() {
		$("#btnGuardar").click(function(event) {
			event.preventDefault();
			var uniorg = document.getElementById('uniorganica').value;
			var gerencia = document.getElementById('nombre_gerencia').value;
			var sigla1 = document.getElementById('sigla').value;
			
			$.ajax({
				url: 'controllers/gerencia.controller.php',
				type: 'post',
				data: {'uniorganica': uniorg, 'nombre_gerencia': gerencia, 'sigla':sigla1},
				success: function(res) {
					$("#mensaje").html(res);
				}
			});
			
		});
	});
</script>