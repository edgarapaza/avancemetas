<?php
include("../models/asignacionPersonal.model.php");

$asignacion = new AsignacionPersonal();

$idoficina      = trim(strtoupper($_REQUEST['idoficina']));
$idarea         = trim(strtoupper($_REQUEST['idarea']));
$idcargo        = trim(strtoupper($_REQUEST['idcargo']));
$idpersonal     = trim(strtoupper($_REQUEST['idpersonal']));
$fecInicioCargo = trim(strtoupper($_REQUEST['fechaCargo']));
$documento      = trim(strtoupper($_REQUEST['documento']));

$asignacion->Guardar($idoficina,$idarea,$idcargo,$idpersonal,$fecInicioCargo,$documento);

header("Location: ../index.php");