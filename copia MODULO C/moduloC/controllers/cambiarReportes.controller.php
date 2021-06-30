<?php
include("../models/reportes.model.php");

$idreportes = $_REQUEST['idreportes'];
$cantidad = $_REQUEST['cantidad'];

$reportes = new Reportes();
$reportes->Modificar($idreportes, $cantidad);

?>

<script type="text/javascript">
  window.close();
</script>