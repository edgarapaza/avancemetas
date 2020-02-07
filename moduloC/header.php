 <?php 
session_start();
include("models/login.model.php");
if(isset($_SESSION['personal']))
{
  //echo $_SESSION['admin'];
  $login = new Login();
  $data = $login->NombrePersonal($_SESSION['personal']);

?>
<!doctype html>
<html lang="es-ES">

<head>
  <title>Avance de Metas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="js/cargarUrl.js"></script>

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Area de Informatica
        </a>
        <a href="#" class="simple-text logo-normal">
          Personal: <?php echo $_SESSION['Personal'];?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">

          <li class="nav-item active  ">
            
            <a class="nav-link" href="#" id="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>

          </li>
                
          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Reporte
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="reportes">Reportes del Personal</a>
                </div>
          </li>
          <li class="nav-item  ">
            
            <a href="#" class="nav-link" id="reportes" >
              <i class="material-icons">table</i>
              <p>Reportes del Personal</p>
            </a>

          </li>

          
          
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
            <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <img src="<?php echo $data['foto'];?>" alt="Foto" width="40">
                  
                   Bienvenid@, <?php   echo $data['personal']; ?>
                    <a href="../controllers/logout.php"> <button class="btn btn-default" name="salir">Salir</button></a>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    <?php 
  }
  else{
    
    header("Location: ../index.html");
  } ?>