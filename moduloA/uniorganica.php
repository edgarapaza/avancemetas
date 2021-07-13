<?php
include "header.php";
require "./models/consultas.model.php";

$consultas = new Consultas();
$data = $consultas->InstitucionArray();
?>

<div class="col-xs-12 col-sm-9 content">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
    </div>
    <div class="panel-body">
      <div class="content-row">
        <h2 class="content-row-title">Nueva Unidad Organica</h2>
          <?php 
            @$msg = $_GET['msg'];
            if(!empty($msg))
            {
              echo $msg;
            }
          ?>
        
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

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>