 <?php 
require("../models/reportes.model.php");


$id_personal = $_POST['id_personal'];
$id_acciones = $_POST['id_acciones'];
$cantidad = $_POST['cantidad'];

$reportes = new Reportes();
$reportes->Guardar($id_personal,$id_acciones,$cantidad);



?>
