	<div class="container">
			<h1>Logros</h1>
			<form action="controllers/metas.controller.php" method="POST" role="form">
				<legend>Registro de Metas</legend>

				<div class="form-group">
					<label for="">Nombre Metas:</label>
					<input type="text" class="form-control" id="nombre_meta" name="nombre_meta" placeholder="">
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
					<label for="">Programado:</label>
					<input type="text" class="form-control" id="programado" name="programado" placeholder="">
				</div>

				
				<div class="form-group">
					<label for="">Unidad de Medida:</label>
					<input type="text" class="form-control" id="unidad_medida" name="unidad_medida" placeholder="">
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		
	</div>
