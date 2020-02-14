 <?php 
require("../models/reportes.model.php");

$cantidad = $_POST['cantidad'];
$id_personal = $_POST['id_personal'];
$id_acciones = $_POST['id_acciones'];
$f_reportes = $_POST['f_reportes'];

$reportes = new Reportes();
$reportes->Guardar($cantidad,$id_personal,$id_acciones,$f_reportes);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>
