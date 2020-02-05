<?php 
require("../models/reportes.model.php");


$id_personal = trim(strtoupper($_POST['id_personal']));
$id_responsabilidades = $_POST['id_responsabilidades'];
$f_reportes = $_POST['f_reportes'];
$cantidad_avance = $_POST['cantidad_avance'];

$reportes = new Reportes();

$reportes->Guardar($id_personal,$id_responsabilidades,$f_reportes,$cantidad_avance);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>