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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/cargarUrl.js"></script>
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/moduloa.css">

</head>

<body>
  <div class="contenedor">

    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <img src="imagenes/GPE.png" alt="Logo GPE" width="80">
        </a>
        <a href="#" class="simple-text logo-normal">
            Administrador
        </a>
    </div>

    <div class="cabecera">  
        <div class="">
            <a class="" href="#">Dashboard</a>
        </div>
        
        <div class="">
          <img src="<?php echo $data['foto'];?>" alt="Foto" width="40"> Bienvenid@, <?php   echo $data['personal']; ?>
          <button class="btn btn-default" name="salir"> <a href="../controllers/logout.php"> Salir</a> </button>
        </div>
    </div>

    <div class="sidebar">

        <ul class="">
          <li class="">
            <a class="" href="index.php" id="">
              <p>Dashboard</p>
            </a>
          </li>

          <li class="">
            <a href="#" class="" id="institucion" >Institucion </a>
          </li>

          <li class="">
                <a class="" href="#" id="">
                  Listado
                </a>

                <ul>
                  <li><a class="dropdown-item" href="#" id="milistadoCargos">Listado de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevoCargos">Nuevo Cargo</a></li>
                  <li><a class="dropdown-item" href="#" id="AsignarCargos">Asignacion de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="ListadoCargos">Listado de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="listadoGerencia">Listado Gerencias</a></li>
                  <li><a class="dropdown-item" href="#" id="milistado">Listado Sub Gerencias</a></li>
                  <li><a class="dropdown-item" href="#" id="listadoareas">Listado de Areas</a></li>
                </ul>
          </li>

          <li class="">
                <a class="" href="#" id="">
                  Nuevo
                </a>
                <ul class="">
                  <li><a class="dropdown-item" href="#" id="nuevaGerencia">Nueva Gerencia</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaArea">Agregar Nueva Area</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaOficina">Nueva Sub Gerencia</a></li>
                  
                </ul>
          </li>

          <li class="">
                <a class="" href="#" id="">
                  Crear Areas
                </a>
                <ul class="" aria-labelledby="">
                  <li><a class="dropdown-item" href="#" id="listadoareas">Listado de Areas</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaArea">Agregar Nueva Area</a></li>
                </ul>
          </li>

          <li class="">
                <a class="" href="#" id="">
                Personal
                </a>
                <ul class="" aria-labelledby="">
                  <li><a class="dropdown-item" href="#" id="listadopersonal">Listado de Personal</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevopersonal">Nuevo Personal</a></li>
                </ul>
          </li>

          <li class="">
                <a class="" href="#" id="">
                Metas
                </a>
                <ul class="" aria-labelledby="">
                  <li><a class="dropdown-item" href="#" id="milistadoMetas">Listado de Metas</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevaMeta">Agregar Nueva Metas</a></li>
                </ul>
          </li>

          <li class="">
                <a class="" href="#" id="">
                  Cargos
                </a>
                <ul class="" aria-labelledby="">
                  <li><a class="dropdown-item" href="#" id="milistadoCargos">Listado de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="nuevoCargos">Nuevo Cargo</a></li>
                  <li><a class="dropdown-item" href="#" id="AsignarCargos">Asignacion de Cargos</a></li>
                  <li><a class="dropdown-item" href="#" id="ListadoCargos">Listado de Cargos</a></li>
                </ul>
          </li>

          <li class="">
              <a class="" href="#" id="estadisticas_oficinas">
              Estadisticas oficinas
              </a>
          </li>
          <li class="">
              <a class="" href="#" id="estadisticas_areas">
              Estadisticas por Areas
              </a>
          </li>
          
        </ul>
    </div>

    <div class="footer">
      
    </div>
  
  
  <?php
  }
  else{

    header("Location: ../index.html");
  } ?>
