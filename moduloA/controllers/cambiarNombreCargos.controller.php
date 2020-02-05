<?php
include("../models/cargos.model.php");

$idcargos = $_REQUEST['idcargos'];
$nombre_cargo = trim(strtoupper($_REQUEST['nombre_cargo']));
$documento= trim(strtoupper($_REQUEST['documento']));

$cargos = new Cargo();
$cargos->Modificar($idcargos, $nombre_cargo, $documento);

//header('Location: ../oficinasCambiar.php');
?>

<script type="text/javascript">
  window.close();
</script>