<script type="text/javascript" src="js/jquery.min.js"></script>


<?php include_once "header.php";

	$dni = $_REQUEST['dni'];
	$nombre = $_REQUEST['nombre'];
	$tipoAtencion = $_REQUEST['tipo'];

	include_once "../controllers/atencionUsuarioController.php";
	$registroUsuarios = new RegistroUsuario();
	$data = $registroUsuarios->Validar($dni,$nombre,$tipoAtencion);


	if($data[0] == 0){
	?>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#nuevo").css({"display":"block"});
		});
	</script>
	<?php
	}
	else{
	?>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#existente").css({"display":"block"});
		});
	</script>
	<?php
	}
?>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Registro de Atención del Usuario</h2>
				<form class="form-group">
					<table class="table">
						<tr>
							<th>Num. DNI</th>
							<td><input type="text" name="dni" placeholder="Numero de DNI" class="form-control" maxlength="8" size="8" required></td>
							<td><button type="submit">Buscar</button></td>
						</tr>
					</table>
				</form>

				<form action="" class="form-group" >
					<table class="table" id="existente" style="display:none;">
						<tr>
							<th>Nombre:</th>
							<td><input type="text" name="nombre" value="<?php echo $data[2]; ?>" placeholder="" class="form-control"></td>
						</tr>
						<tr>
							<th>Tipo de Dato:</th>
							<td><input type="text" name="tipo" value="<?php echo $data[3]; ?>" placeholder="" class="form-control"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-success">Guardar</button></td>
						</tr>
					</table>
				</form>

				<form action="" class="form-group" >
					<table class="table" id="nuevo" style="display:none;">
						<tr>
							<th>DNI:</th>
							<td><input type="text" name="dni" value="<?php echo $dni;?>" class="form-control"></td>
						</tr>
						<tr>
							<th>Nombre:</th>
							<td><input type="text" name="nombre" placeholder="" class="form-control"></td>
						</tr>
						<tr>
							<th>Tipo de Dato:</th>
							<td>
								<select name="tipo">
									<option value="Asesoria Juridica">Asesoria Juridica</option>
									<option value="Atención Usuarios">Atención Usuarios</option>
									<option value="Consulta Juridica">Consulta Juridica</option>
									<option value="Aseoria para Regularizacion">Aseoria para Regularizacion</option>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-success">Guardar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>

