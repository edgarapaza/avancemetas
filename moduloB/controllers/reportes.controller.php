<?php 
require("../models/reportes.model.php");


$id_personal = $_POST['id_personal'];
$id_acciones = $_POST['id_acciones'];
$f_reportes = $_POST['f_reportes'];
$cantidad_avance = $_POST['cantidad_avance'];

$reportes = new Reportes();
$reportes->Guardar($id_personal,$id_acciones,$f_reportes,$cantidad_avance);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>