<?php
include "header.php";
require("./models/oficinas.model.php");
require("./models/areas.model.php");
require("./models/personal.model.php");

$oficinas = new Oficinas();
$office = $oficinas->Consultar();

$areas = new Areas();
$area = $areas->Consultar();

$personal = new Personal();
$persona = $personal->Consultar();

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
			<form action="controllers/cargos.controller.php" method="POST" role="form">
				<legend>Registro de Cargos</legend>
	            <div class="form-group">
					<label for="">Listade oficinas:</label>

					<select name="idoficina" id="idoficina" class="form-control">
						<option value="0" selected="selected">Select</option>
						<?php 
						while ($fila = $office->fetch_array(MYSQLI_ASSOC)) { ?>

						 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'];?></option>
						<?php } ?>
					</select>

				</div>
			

				<div class="form-group">
					<label for="">Listado de Áreas:</label>

					<select name="idarea" id="idarea" class="form-control">
						<option value="0" selected="selected">Select</option>
						<?php 
						while ($fila = $area->fetch_array(MYSQLI_ASSOC)) { ?>

						 <option value="<?php echo $fila['id_areas']; ?>"><?php echo $fila['nombre'];?></option>
						<?php } ?>
					</select>

				</div>

				<div class="form-group">
					<label for="">Listado de Personal:</label>

					<select name="idpersonal" id="" class="form-control">
						<option value="0" selected="selected">Select</option>
						<?php 
						while ($fila = $persona->fetch_array(MYSQLI_ASSOC)) { ?>

						 <option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre']." ".$fila['apellidos'];?></option>
						<?php } ?>
					</select>

				</div>

				<div class="form-group">
					<label for="">Nombre Cargo:</label>
					<input type="text" class="form-control" id="nombre_cargo" name="nombre_cargo" placeholder="Nombre Cargo">
				</div>
				
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
        </div>
      </div>
    </div>
  </div>
		
<?php include "footer.php"; ?>