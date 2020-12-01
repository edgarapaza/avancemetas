 <?php
session_start();
include("models/login.model.php");
if(isset($_SESSION['admin']))
{
  //echo $_SESSION['admin'];
  $login = new Login();
  $data = $login->NombrePersonal($_SESSION['admin']);

?>
<!doctype html>
<html lang="es">

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
  <link rel="stylesheet" href="css/menu.css">

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
          <img src="imagenes/GPE.png" alt="Logo GPE" width="80">
        </a>
        <a href="#" class="simple-text logo-normal">
          Administrador
        </a>
      </div>
      <div class="contenedor-menu">

        <ul class="menu">

          <li class="nav-item active">

            <a class="" href="index.php" id="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>

          </li>
        

          <li class="">

            <a href="#" class="menu" id="institucion" >
              
              <p></p>
            </a>

          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Listado
                </a>
                  
                <ul class="menu">
                  <li><li><a class="dropdown-item" href="#" id="listadoGerencia">Listado Gerencias</a></li></li>
                  <li><li><a class="dropdown-item" href="#" id="milistado">Listado Sub Gerencias</a></li></li>
                  <li><li><a class="dropdown-item" href="#" id="listadoareas">Listado de Areas</a></li></li>
                </ul>
          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nuevo
                </a>
                <ul class="menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="nuevaGerencia">Nueva Gerencia</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaArea">Agregar Nueva Area</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaOficina">Nueva Sub Gerencia</a></li>
                  <li><a href="#"><i class="material-icons">room</i>Institucion</a></li>
                </ul>
          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Crear Areas
                </a>
                <ul class="menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="listadoareas">Listado de Areas</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaArea">Agregar Nueva Area</a></li>
                </ul>
          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Personal
                </a>
                <ul class="menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="listadopersonal">Listado de Personal</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevopersonal">Nuevo Personal</a></li>
                </ul>
          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Metas
                </a>
                <ul class="menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="milistadoMetas">Listado de Metas</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaMeta">Agregar Nueva Metas</a></li>
                </ul>
          </li>

          <li class="">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cargos
                </a>
                <ul class="menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="milistadoCargos">Listado de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevoCargos">Nuevo Cargo</a></li>
                  <li><a class="dropdown-item" href="#" id="AsignarCargos">Asignacion de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="ListadoCargos">Listado de Cargos</a></li>
                </ul>
          </li>

          <li class="">s
            <a href="#" class="nav-link" id="estadisticas_oficinas" >
              
              <p><i class="material-icons">note</i>Estadisticas oficinas</p>
            </a>

          </li>
          <li class="">
            <a href="#" class="nav-link" id="estadisticas_areas" >
              
              <p><i class="material-icons">report</i>Estadisticas por Areas</p>
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

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" id="milistadoCargos">Listado de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevoCargos">Nuevo Cargo</a></li>
                  <li><a class="dropdown-item" href="#" id="AsignarCargos">Asignacion de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="ListadoCargos">Listado de Cargos</a></li>
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

      <script src="js/jquery-3.5.1.js"></script>
        <script src="js/menu.js"></script>
  <?php
  }
  else{

    header("Location: ../index.html");
  } ?>
