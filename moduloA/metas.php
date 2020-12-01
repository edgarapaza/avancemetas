<?php

?>
	<div class="container">
			
			<form action="../moduloA/controllers/metas_controller.php" method="POST" role="form">
				<legend>Registro de Metas</legend>

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
