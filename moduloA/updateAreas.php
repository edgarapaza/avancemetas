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
<link rel="stylesheet" href="assets/css/material-dashboard.min.css">
	<div class="container">
		
		<form action="controllers/cambiarAreas.controller.php" method="POST" role="form">
			<legend>Cambiar Datos de Areas: </legend>

			<div class="form-group">
				<input type="hidden" value="<?php echo $idareas;?>" name="id_areas">
				<label for="">Nombre Area:</label>
				<input type="text" class="form-control" id="" value="<?php echo $row['nombre'];?>" name="nombre" >
			</div>
			<div class="form-group">
			    <label for="">Cambiar Direccion/Oficina:</label>
				<select name="idoficina" id="idoficina" class="form-control">
					<option value="0">[Seleccionar]</option>
					<?php while ($row = $office->fetch_array(MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre_of']; ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Descripcion:</label>
				<input type="text" class="form-control" id="" name="descripcion" value="<?php echo $row['descripcion'];?>" >
			</div>
			<button type="submit" class="btn btn-primary">GUARDAR</button>
		</form>

	</div>
