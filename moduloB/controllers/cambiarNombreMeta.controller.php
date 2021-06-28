<?php
include("../models/metas.model.php");

$idmeta = $_REQUEST['idmeta'];
$nombre = trim(strtoupper($_REQUEST['nombre']));
$cantidad = trim(strtoupper($_REQUEST['cantidad']));
$unidadmedida = trim(strtoupper($_REQUEST['unidadmedida']));
$frecuencia = trim(strtoupper($_REQUEST['frecuencia']));

$meta = new Metas();
$meta->Modificar($idmeta, $nombre,$cantidad,$unidadmedida,$frecuencia);

//header('Location: ../oficinasCambiar.php');
?>

<script type="text/javascript">
  window.close();
</script>