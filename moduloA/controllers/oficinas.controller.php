<?php 
require("../models/oficinas.model.php");


$nombre_of = trim(strtoupper($_POST['nombre_of']));
$id_institucion = $_POST['id_institucion'];

$oficina = new Oficinas();

$oficina->Guardar($nombre_of,$id_institucion);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>