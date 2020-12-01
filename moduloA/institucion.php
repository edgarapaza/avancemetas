<?php
require("../moduloA/models/metas.model.php");

$metas = new Metas();
$data = $metas->Consultar();
?>
	<div class="container">

			<h1>INSTITUCION</h1>
			<form action="controllers/institucion.controller.php" method="POST" role="form">
				<legend>Completa el formulario</legend>

				<div class="form-group">
					<label for="" class="bmd-label-floating">Nombre institucion</label>
					<input type="text" class="form-control" id="" name="nom_institucion" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Direccion:</label>
					<input type="text" class="form-control" id="" name="direccion" placeholder="">
				</div>

				<div class="form-group">
					<label for="">telefono:</label>
					<input type="text" class="form-control" id="" name="telefono" placeholder="">
				</div>
				<div class="form-group">
					<label for="">RUC:</label>
					<input type="text" class="form-control" id="" name="RUC" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Email:</label>
					<input type="email" class="form-control" id="" name="Email" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Pagina web:</label>
					<input type="text" class="form-control" id="" name="Pagina_web" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Fecha de creacion de la institucion:</label>
					<input type="date" class="form-control" id="" name="f_creacion_institucion" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Metas:</label>
					<select name="idmetas" id="" class="form-control">
						<option value="0" selected="selected">Select</option>
						<?php
						while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
						?>
						<option value="<?php echo $fila['id_metas']; ?>"><?php echo $fila['nombre_meta']. "-" . $fila['programado'];?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Numero de resolucion:</label>
					<input type="text" class="form-control" id="" name="N_resolucion" placeholder="">
				</div>


				<button type="submit" class="btn btn-primary">enviar</button>

			</form>

	</div>
