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
        <h2 class="content-row-title">Titulo</h2>
        <h1 class="h3 mb-4 text-gray-800">Personal</h1>
          <form action="controllers/personal.controller.php" method="POST">

							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" class="form-control" name="nombre" placeholder="">
							</div>
							<div class="form-group">
								<label for="">Apellidos:</label>
								<input type="text" class="form-control" name="apellidos" placeholder="">
							</div>
							<div>
								<label>sexo</label>
								<div id="gender" class="btn-group" data-toggle="buttons">
					          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" name="sexo" value="masculino"> &nbsp; Masculino &nbsp;
										</label>
										<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" name="sexo" value="femenino"> Femenino
										</label>
								</div>
							</div>
						
							<div class="form-group">
								<label for="">telefono:</label>
								<input type="text" class="form-control" name="telefono" placeholder="">
							</div>
							<div class="form-group">
								<label for="">fecha de nacimiento:</label>
								<input type="date" class="form-control" name="fecha_nacimiento" placeholder="">
							</div>
							<div class="form-group">
								<label for="">email:</label>
								<input type="text" class="form-control" name="email" placeholder="">
							</div>

							<div class="form-group">
								<label for="">DNI:</label>
								<input type="text" class="form-control" name="dni" placeholder="">
							</div>

							<div class="form-group">
								<label for="">foto:</label>
							</div>
								<input type="file" id="fileinput" accept="image/x-png,image/gif,image/jpeg" />
								<div id="gallery"></div>

							<button type="submit" class="btn btn-primary">Guardar</button>
					</form>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>