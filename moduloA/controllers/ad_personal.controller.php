<?php 
require("../models/adpersonal.model.php");

$profesion = $_POST['profesion'];
$tiempo_servicio = $_POST['tiempo_servicio'];
$condicion = $_POST['condicion'];
$seguro_social = $_POST['seguro_social'];
$grupo_sanguineo = $_POST['grupo_sanguineo'];
$f_ingreso = $_POST['f_ingreso'];
$f_deceso = $_POST['f_deceso'];

$adper = new AdPersonal();
$adper->Guardar($profesion,$tiempo_servicio,$condicion,$seguro_social,$grupo_sanguineo,$f_ingreso,$f_deceso);

header("Location: ../index.php");
?>
<script type="text/javascript">
  window.close();
</script>