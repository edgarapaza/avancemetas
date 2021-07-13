<?php
include "header.php";
require("./models/oficinas.model.php");
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
				<h2 class="content-row-title">Areas nueva area</h2>
				<form action="controllers/areas.controller.php" method="POST" role="form">
					<legend>Registro de Areas</legend>
					<div class="form-group">
						<label for="">Sub gerencia:</label>
						<select name="iddireccion" id="iddireccion" class="form-control">
							<option value="0">[Seleccionar]</option>
							<?php while ($row = $office->fetch_array(MYSQLI_ASSOC)) { ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nombre de Area:</label>
						<input type="text" class="form-control" id="" name="nombre_area" placeholder="Nombre de Area">
					</div>
					
					<div class="form-group">
						<label for="">Descripcion:</label>
						<input type="text" class="form-control" id="" name="descripcion" placeholder="Descripcion">
					</div>
					
					
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php include "footer.php"; ?>