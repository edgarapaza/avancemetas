<?php
include "header.php";
?>
<div class="col-xs-12 col-sm-9 content">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
    </div>
    <div class="panel-body">
      <div class="content-row">
        <h2 class="content-row-title">Institucion</h2>
        
						<form action="controllers/institucion.controller.php" method="POST" role="form">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nombre institucion</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="nom_institucion" placeholder="">
								</div>
								
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Direccion:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="direccion" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">telefono:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="telefono" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">RUC:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="RUC" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Email:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="" name="Email" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Pagina web:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="Pagina_web" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Fecha de creacion de la institucion:</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="" name="f_creacion_institucion" placeholder="">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="" class="col-sm-2 col-form-label">Numero de resolucion:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="" name="N_resolucion" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary">enviar</button>
								</div>
							</div>
						</form>
      </div>

    </div>

  </div>
</div>

<?php include "footer.php"; ?>