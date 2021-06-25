<?php
include "header.php";
?>


  
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
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