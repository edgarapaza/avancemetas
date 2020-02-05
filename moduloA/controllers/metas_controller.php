<?php 
require("../models/metas.model.php");

$nombre_meta = trim(strtoupper($_POST['nombre_meta']));
$programado = trim(strtoupper($_POST['programado']));
$unidad_medida = trim(strtoupper($_POST['unidad_medida']));


$meta = new Metas();
$meta->Guardar($nombre_meta,$programado,$unidad_medida);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>