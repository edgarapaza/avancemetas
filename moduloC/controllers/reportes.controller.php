<?php 
require("../models/reportes.model.php");


$id_personal = $_POST['id_personal'];
$id_acciones = $_POST['id_acciones'];
$cantidad = $_POST['cantidad'];

/*echo $id_personal."<br>";
echo $id_acciones."<br>";
echo $cantidad."<br>";*/

$reportes = new Reportes();
$reportes->Guardar($id_personal,$id_acciones,$cantidad);

//header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>