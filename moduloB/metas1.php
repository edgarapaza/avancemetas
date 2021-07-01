<?php
include "header.php";

require "./models/consultas.model.php";

$consultas = new Consultas();
$data_p  = $consultas->MostrarPersonal();

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<!-- PAGE CUERPO -->

          	<legend>Registro de Metas</legend>
          	<form action="controllers/metas.controller.php" method="POST">

				<div class="form-group">
					<label for="">Nombre Metas: </label>
					<input type="text" class="form-control" name="nombre" placeholder="">
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
					<label for="">Cantidad:</label>
					<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="">
				</div>

				
				<div class="form-group">
					<label for="">Unidad de Medida:</label>
					<input type="text" class="form-control" id="unidadmedida" name="unidadmedida" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Personal:</label>
					<select name="id_personal" id="id_personal" class="form-control">
						<option value="0">[Seleccionar]</option>
						<?php while ($row = $data_p->fetch_array(MYSQLI_ASSOC)) { ?>
						<option value="<?php echo $row['id_personal']; ?>"><?php echo $row['nombre'] ." ".$row['apellidos']; ?></option>
						<?php } ?>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
					</form>

	
        </div>
      </div>
    </div>
  </div>
<?php include "footer.php"; ?>