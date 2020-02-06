<?php
include("../models/reportes.model.php");

$id_reportes = $_REQUEST['id_reportes'];
$cantidad_avance = $_REQUEST['cantidad_avance'];

$reportes = new Reportes();
$reportes->Modificar($id_reportes, $cantidad_avance);

?>

<script type="text/javascript">
  window.close();
</script>