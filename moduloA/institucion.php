<?php
include "header.php";
require "models/consultas.model.php";
$consulta = new Consultas();
$result = $consulta->DatosInstitucion();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Institucion</h2>
				<?php
				
				if($result['estado'] == 1)
				{
					echo "Datos Ingresados.  Si desea una modificacion de la información, comuniquese con el administrador del sistema";
				?>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nombre institucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="nom_institucion" readonly value="<?php echo $result['nombre_inst'];?>">
					</div>
					
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Direccion:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="direccion" readonly value="<?php echo $result['direccion'];?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">telefono:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="telefono" readonly value="<?php echo $result['telefono'];?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">RUC:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="RUC" readonly value="<?php echo $result['RUC'];?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="" name="Email" readonly value="<?php echo $result['email'];?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Pagina web:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="Pagina_web" readonly value="<?php echo $result['p_web'];?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Fecha de creacion de la institucion:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="" name="f_creacion_institucion" readonly value="<?php echo $result['creacion'];?>">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Numero de resolucion:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" name="N_resolucion" readonly value="<?php echo $result['resolucion'];?>">
					</div>
				</div>
				
				<?php
				}else{
					#echo "Vacio";
				?>
				<form action="controllers/institucion.controller.php" method="POST" role="form">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nombre institucion</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="nom_institucion" required>
						</div>
						
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Direccion:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="direccion" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">telefono:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="telefono" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">RUC:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="RUC" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Email:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="" name="Email" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Pagina web:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="Pagina_web" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Fecha de creacion de la institucion:</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="" name="f_creacion_institucion" required>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Numero de resolucion:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="" name="N_resolucion" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Guardar Datos</button>
						</div>
					</div>
				</form>
				<?php
				}
				?>
				
				
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>