<?php
include "header.php";
require "./models/consultas.model.php";

$consultas = new Consultas();
$data = $consultas->InstitucionArray();
?>
  
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Nueva Unidad Organica </h1>
          <form action="controllers/uniorganica.controller.php" method="POST" role="form">
        
            <div class="form-group">
              <label for="">Institucion a la que pertenece:</label>
              <input type="hidden" name="idinstitucion" value="<?php echo $data['id']; ?>" class="form-control" readonly="">
              <input type="text" class="form-control" required autocomplete="off" readonly="" value="<?php echo $data['nombre_inst']; ?>">
            </div>        
            <div class="form-group">
              <label for="">Nombre Unidad Organica principal:</label>
              <input type="text" class="form-control" id="unidadorganica" name="unidadorganica" placeholder="" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Sigla:</label>
              <input type="text" class="form-control" id="sigla" name="sigla" required autocomplete="off">
            </div>
                
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>