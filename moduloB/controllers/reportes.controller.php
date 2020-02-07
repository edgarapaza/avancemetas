<?php 
require("../models/reportes.model.php");


$id_personal = $_POST['id_personal'];
$id_acciones = $_POST['id_acciones'];
$f_reportes = $_POST['f_reportes'];
$cantidad = $_POST['cantidad'];

$reportes = new Reportes();
$reportes->Guardar($id_personal,$id_acciones,$f_reportes,$cantidad);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>