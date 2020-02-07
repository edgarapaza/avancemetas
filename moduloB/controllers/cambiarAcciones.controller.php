<?php
include("../models/acciones.model.php");

$id_acciones = $_REQUEST['id_acciones'];
$nomb_actividad = trim(strtoupper($_REQUEST['nomb_actividad']));
$unidad_medida = trim(strtoupper($_REQUEST['unidad_medida']));

$acciones = new Acciones();
$acciones->Modificar($id_acciones, $nomb_actividad, $unidad_medida);

header("location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>