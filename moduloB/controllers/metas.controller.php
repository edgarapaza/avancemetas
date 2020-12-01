<?php 
require '../models/metas.model.php';

$nombre_meta   = $_POST['nombre_meta'];
$programado    = $_POST['programado'];
$unidad_medida = $_POST['unidad_medida'];
$frecuencia    = $_POST['frecuencia'];

$meta = new Metas();
$meta->Guardar($nombre_meta,$programado,$unidad_medida, $frecuencia);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>