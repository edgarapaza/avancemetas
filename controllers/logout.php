<?php  

/*primera forma*/

session_start();
  unset($_SESSION["clave"]); 
  unset($_SESSION["username"]);
  session_destroy();
  header("Location: ../index.html");
  exit;

/*segunda forma
  session_start();
  unset($_SESSION["clave"]); 
  unset($_SESSION["username"]);
  session_destroy();
  header("Location: ../login.html");
  exit;
*/
?>

