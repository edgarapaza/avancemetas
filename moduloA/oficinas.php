<?php

require("../moduloA/models/metas.model.php");
require("../moduloA/models/institucion.model.php");


$metas = new Metas();
$data = $metas->Consultar();
$institucion = new Institucion();
$datos = $institucion->ConsultaGerencias();


?>
<style>
	.container{
		background-color: #fff;
	}
</style>

<div class="container">
	
	<CENTER><h1>Crear una nueva Sub Gerencia</h1></CENTER>
		<form action="controllers/oficinas.controller.php" method="POST" role="form">
			
			<div class="form-group">
				<label for="">¿A que Gerencia partenece?:</label>
				<select name="idgerencia" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccione una Gerencia]</option>
					<?php
					
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 
					?>

					 <option value="<?php echo $fila['idgerencia']; ?>"><?php echo $fila['nomgerencia'];?></option>
					<?php } 
					?>
				</select>
			</div>

		
			<div class="form-group">
				<label for="">Nombre Sub Gerencia:</label>
				<input type="text" class="form-control" id="nomsubgerencia" name="nomsubgerencia" placeholder="">
			</div>
			<div class="form-group">
				<label for="">Sigla:</label>
				<input type="text" class="form-control" id="" name="sigla" placeholder="">
			</div>
					
			
			
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
</div>
