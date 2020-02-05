<?php
include("../models/metas.model.php");

$idmeta = $_REQUEST['idmeta'];
$nombre_meta = trim(strtoupper($_REQUEST['nombre_meta']));
$programado = trim(strtoupper($_REQUEST['programado']));
$unidad_medida = trim(strtoupper($_REQUEST['unidad_medida']));

$meta = new Metas();
$meta->Modificar($idmeta, $nombre_meta,$programado,$unidad_medida);

//header('Location: ../oficinasCambiar.php');
?>

<script type="text/javascript">
  window.close();
</script>