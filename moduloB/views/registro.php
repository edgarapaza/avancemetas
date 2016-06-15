<?php
session_start();
if(isset($_SESSION['personal']))
{
	include "header.php";

	$idactividad = $_REQUEST['idactividad'];
	$idpersonal  = $_REQUEST['idpersonal'];
	$actividad  = $_REQUEST['actividad'];

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
					<input type="text" name="obs" class="form-control" />
					<br>
					<button type="submit" name="btnguardar" class="btn btn-danger">Guardar</button>
				</form>
			</div>
		</div>
	</div>


<?php
}else{
	header("Location: ../../index.php");
}
?>