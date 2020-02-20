<?php
require("../moduloA/models/metas.model.php");
require("../moduloA/models/institucion.model.php");


$metas = new Metas();
$data = $metas->Consultar();
$institucion = new Institucion();
$datos = $institucion->Consultar();


?>

	<CENTER><h1>OFICINAS</h1></CENTER>
		<form action="controllers/oficinas.controller.php" method="POST" role="form">
			<legend>Registro de Oficinas</legend>

		
			<div class="form-group">
				<label for="">Nombre Oficina:</label>
				<input type="text" class="form-control" id="" name="nombre_of" placeholder="Nombre Oficina">
			</div>
			<div class="form-group">
				<label for="">Sigla:</label>
				<input type="text" class="form-control" id="" name="sigla" placeholder="Sigla">
			</div>
					
			<div class="form-group">
				<label for="">Institucion:</label>
				<select name="id_institucion" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre_inst'];?></option>
					<?php } ?>
				</select>
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>