<?php
include "header.php";
require "models/consultas.model.php";

$consultas = new Consultas();
//$data_of = $consultas->MostrarOficinas();
//$data_a  = $consultas->MostrarAreas();
$data_c  = $consultas->MostrarCargos();
$data_p  = $consultas->MostrarPersonal();

?>
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          	<form action="controllers/acciones.controller.php" method="POST" role="form">
				<legend>Registro de Acciones</legend>

				<div class="form-group">
					<label for="">Cargo:</label>
					<select name="id_cargos" id="id_cargos" class="form-control">
						<option value="0">[Seleccionar]</option>
						<?php while ($row = $data_c->fetch_array(MYSQLI_ASSOC)) { ?>
						<option value="<?php echo $row['id_cargos']; ?>"><?php echo $row['nombre']; ?></option>
						<?php } ?>
					</select>
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

	      		<div class="form-group">
					<label for="">Nombre de la Accion:</label>
					<input type="text" class="form-control" id="" name="nom_actividad" placeholder="Nombre de la Accion">
				</div>
			
				<div class="form-group">
				<label for="">Unidad de Medidad:</label>
				
				<select name="unidad_medida" class="form-control">
					<option value="0" selected="selected">[Unidad de Medida]</option>
					<option value="Unidad">Unidad</option>
					<option value="Metros Lineales">Metros Lineales</option>
					<option value="Moneda">Moneda</option>
					<option value="Porcentaje">Porcentaje</option>
          			<option value="Servicio">Servicio</option>         <option value="Documentos">Documentos</option>
          			<option value="Escritura">Escritura</option>
          			<option value="Usuario">Usuario</option>
          			<option value="Accion">Accion</option>
          			<option value="Inst. Superv">Inst. Superv</option>

				</select>
				</div>
				
			
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

        </div>
      </div>
    </div>
  </div>
		
<?php include "footer.php"; ?>