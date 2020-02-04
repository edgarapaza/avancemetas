<?php
include("../models/login.model.php");

$login = new Login();
$data = $login->ultimoRegistro();

$siguiente = $data[0]+1;
echo $siguiente;

$idpersonal = $_REQUEST['idpersonal'];

echo "id personal: ".$idpersonal;

