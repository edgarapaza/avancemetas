<?php
session_start();
//if(isset($_SESSION["administrator"]))
//{
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
        <form action="">
          Agregar sub gerencia
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>