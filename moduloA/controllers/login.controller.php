<?php
include("../models/login.model.php");

$login = new Login();

$codigoPersonal = $_REQUEST['codigo'];
$idpersonal = $_REQUEST['idpersonal'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$nivel = $_REQUEST['nivel'];

$data = $login->RegistraAcceso($codigoPersonal, $idpersonal, $username,$password,$nivel);
?>
<script type="text/javascript">
  window.close();
</script>