<?php
include "header.php";
require("./models/oficinas.model.php");

$oficinas = new Oficinas();
$office = $oficinas->Consultar();

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
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