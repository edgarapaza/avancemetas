<?php
session_start();
if(isset($_SESSION['personal']))
{
	include_once "header.php";
	include_once "../controllers/ListadoControllers.php";

	$idactividad = $_REQUEST['idactividad'];
	$idpersonal  = $_REQUEST['idpersonal'];
	$actividad  = $_REQUEST['actividad'];

	$rpta = Validar($idpersonal, $idactividad);

	if($rpta == 0){

?>


	<div class="container">
		<div class="row">
			<h2>Reporte diario del personal</h2>
			<h3 class="alert alert-info"><?php echo $actividad; ?></h3>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<form name="formulario" method="post" action="../controllers/insercionDatos.php">
					<input type="hidden" name="idactividad" value="<?php echo $idactividad; ?>" />
					<input type="hidden" name="idpersonal" value="<?php echo $idpersonal; ?>" />
					<label>Ingresos del dia:</label>
					<input type="text" name="reporte" class="form-control" required="required"/>
					<label>Observaciones:</label>
						<textarea name="obs"></textarea>
					<br>
					<button type="submit" name="btnguardar" class="btn btn-danger">Guardar</button>
				</form>
			</div>
		</div>
	</div>


<?php
	}
	else{

?>
	<div class="container">
		<div class="row">
			<h2>Reporte diario del personal</h2>
			<h3 class="alert alert-info"><?php echo $actividad; echo "Ya fue Registrado, ¿Deseas añadir un nuevo reporte?"; ?></h3>

				<input type="button" onclick="Habilitar()" name="btnSi" value="Si" class="btn btn-success" />
				<input type="button" onclick="Cerrar()" name="btnNo" value="No" class="btn btn-danger" />
			<div class="col-xs-12 col-sm-12 col-md-6">

				<form name="formulario" style="display: none;" id="formulario" method="post" action="../controllers/insercionDatos.php">
					<input type="hidden" name="idactividad" value="<?php echo $idactividad; ?>" />
					<input type="hidden" name="idpersonal" value="<?php echo $idpersonal; ?>" />
					<label>Ingresos del dia:</label>
					<input type="text" name="reporte" class="form-control" required="required"/>
					<label>Observaciones:</label>
						<textarea name="obs"></textarea>
					<br>
					<button type="submit" name="btnguardar" class="btn btn-danger">Guardar</button>
				</form>
			</div>
		</div>
	</div>
<?php

	}
?>








<?php
}else{
	header("Location: ../../index.php");
}
?>
	<script type="text/javascript">
	    function Habilitar(){
	    	document.getElementById('formulario').style.display = 'block';
	    }
	    function Cerrar(){
	    	self.close();
	    }
	</script>