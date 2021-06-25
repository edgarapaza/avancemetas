<?php 
require("../models/cargos.model.php");

$nombre      = trim(strtoupper($_POST['nombre_cargo']));
$id_oficina  = trim(strtoupper($_POST['idoficina']));
$id_areas    = trim(strtoupper($_POST['idarea']));
$id_personal = trim(strtoupper($_POST['idpersonal']));

$cargo = new Cargo();
$cargo->Guardar($nombre,$id_oficina,$id_areas,$id_personal);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>
