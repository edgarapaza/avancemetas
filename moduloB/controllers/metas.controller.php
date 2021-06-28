<?php 
require '../models/metas.model.php';

$nombre_meta   = $_POST['nombre'];
$cantidad    = $_POST['cantidad'];
$unidadmedida = $_POST['unidadmedida'];
$frecuencia    = $_POST['frecuencia'];
$id_personal    = $_POST['id_personal'];

$meta = new Metas();
$meta->Guardar($nombre_meta,$cantidad,$unidadmedida, $frecuencia,$id_personal);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>