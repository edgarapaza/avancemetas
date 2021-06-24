<?php
include "header.php";
?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <center><h1>Crear una nueva Gerencia</h1></center>
			<form action="controllers/gerencia.controller.php" method="POST" role="form">
				<legend>Registro de Gerencias</legend>
			
				<div class="form-group">
					<label for="">Nombre de la Nueva Gerencia/Oficina:</label>
					<input type="text" class="form-control" id="nombre_gerencia" name="nombre_gerencia" placeholder="">
				</div>
				<div class="form-group">
					<label for="">Sigla:</label>
					<input type="text" class="form-control" id="sigla" name="sigla" placeholder="">
				</div>
					
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

        </div>
      </div>
    </div>
  </div>
	
		
</div>

<?php include "footer.php"; ?>