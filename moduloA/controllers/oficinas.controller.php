<?php 
require("../models/oficinas.model.php");


$idgerencia = $_POST['idgerencia'];
$nomsubgerencia = trim(strtoupper($_POST['nomsubgerencia']));
$sigla = trim(strtoupper($_POST['sigla']));

$oficina = new Oficinas();

$oficina->Guardar($nomsubgerencia,$sigla,$idgerencia);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>