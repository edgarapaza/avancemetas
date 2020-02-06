<?php
require("../moduloA/models/personal.model.php");
require("./models/responsabilidades.model.php");


$personal = new Personal();
$data = $personal->Consultar();
$responsabilidades = new Responsabilidades();
$datos = $responsabilidades->Consultar();


?>

	<CENTER><h1>REPORTES</h1></CENTER>
		<form action="controllers/reportes.controller.php" method="POST" role="form">
			<legend>Registro de Reportes</legend>
						
			<div class="form-group">
				<label for="">Id Personal:</label>
				<select name="id_personal" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['nombre'];?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Id Responsabilidades:</label>
				<select name="id_responsabilidades" id="" class="form-control">
			     	<option value="0" selected="selected">Select</option>
					<?php 
					while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {					 ?>

					 <option value="<?php echo $fila['id_responsabilidades']; ?>"><?php echo $fila['nomb_resp'];?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Fecha Reportes:</label>
				<input type="date" class="form-control" id="" name="f_reportes" placeholder="ingresar fecha del reporte">
			</div>

			<div class="form-group">
				<label for="">Cantidad Avance:</label>
				<input type="text" class="form-control" id="" name="cantidad_avance" placeholder="cantidad avance">
			</div>
			
			<button type="submit" class="btn btn-primary">enviar</button>
		</form>