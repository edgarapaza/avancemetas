<?php
require("../moduloA/models/oficinas.model.php");

$oficinas = new Oficinas();
$office = $oficinas->Consultar();

?>


	<div class="container">
		<div class="row">
		<h1>AREAS</h1>
		<form action="controllers/areas.controller.php" method="POST" role="form">
			<legend>Registro de Areas</legend>

			<div class="form-group">
				<label for="">Direccion/Oficina:</label>
				<select name="iddireccion" id="iddireccion" class="form-control">
					<option value="0">[Seleccionar]</option>
					<?php while ($row = $office->fetch_array(MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre_of']; ?></option>
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
</body>
</html>

