<?php
require("../moduloA/models/oficinas.model.php");

$oficinas = new Oficinas();
$office = $oficinas->Consultar();

?>
		      
			<h1>CARGO</h1>
			<form action="controllers/cargos.controller.php" method="POST" role="form">
				<legend>Registro de Cargos</legend>
	            <div class="form-group">
					<label for="">Listade oficinas:</label>

					<select name="idoficina" id="" class="form-control">
						<option value="0" selected="selected">Select</option>
						<?php 
						while ($fila = $office->fetch_array(MYSQLI_ASSOC)) { ?>

						 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre_of'];?></option>
						<?php } ?>
					</select>

				</div>
			-
				<div class="form-group">
					<label for="">Nombre Cargo:</label>
					<input type="text" class="form-control" id="" name="nombre_cargo" placeholder="Nombre Cargo">
				</div>
				
				<button type="submit" class="btn btn-primary">enviar</button>
			</form>		
		    </div>
		    			
		</div>
	</div>
