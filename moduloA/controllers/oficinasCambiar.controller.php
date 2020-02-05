<?php 
include("../models/oficinas.model.php");
$oficinas = new Oficinas();
$oficinas->MostrarOficina($idoficina);

?>

<script type="text/javascript">
  window.close();
</script>