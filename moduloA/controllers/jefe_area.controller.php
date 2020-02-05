	<?php 
require("../models/jefe_area.model.php");

$id_personal = $_POST['id_personal'];
$id_areas = $_POST['id_areas'];

$jefearea = new JefeArea();
$jefearea->Guardar($id_personal,$id_areas);

header("Location: ../index.php");

?>

<script type="text/javascript">
  window.close();
</script>