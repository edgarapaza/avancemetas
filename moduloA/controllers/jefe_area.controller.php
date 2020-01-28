	<?php 
require("../models/jefe_area.model.php");
$id_personal = $_POST('id_personal');
$id_areas = $_POST('id_areas');


$jefe = new JefeArea();
$jefe->Guardar($id_personal,$id_areas);

header("Location: ../index.php");
