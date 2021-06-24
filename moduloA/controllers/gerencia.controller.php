<?php 
require("../models/gerencia.model.php");

$nomgerencia   = trim(strtoupper($_POST['nombre_gerencia']));
$sigla         = trim(strtoupper($_POST['sigla']));
$idinstitucion = 1; //$_POST['id_institucion'];

$gerencias = new Gerencias();
$gerencias->Guardar($nomgerencia,$sigla,$idinstitucion);

header("Location: ../index.php");

?>