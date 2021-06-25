<?php
include "header.php";
require "./models/uniorganica.model.php";

$uniorg = new UnidadOrganica();
$data = $uniorg->Listado();
?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
          <!-- PAGE CUERPO -->

          <h1 class="h3 mb-4 text-gray-800">Crear una nueva Gerencia</h1>
					<form action="controllers/gerencia.controller.php" method="POST" role="form">
						
						<div class="form-group">
							<label for="">Selecciona la Unidad Organica que depende</label>
							<select name="uniorganica" class="form-control">
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
							<input type="text" class="form-control" id="nombre_gerencia" name="nombre_gerencia" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Sigla:</label>
							<input type="text" class="form-control" id="sigla" name="sigla" placeholder="">
						</div>
							
						<button type="submit" class="btn btn-primary">Guardar</button>
					</form>

        </div>
      </div>
    </div>
  </div>
	
		
</div>

<?php include "footer.php"; ?>