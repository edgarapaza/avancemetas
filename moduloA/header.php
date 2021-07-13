<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
    <style type="text/css">
      .content{
        min-height: 450px;
      }
    </style>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Logro de Metas</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="getting-started.html">Getting Started</a></li>
            <li class="active"><a href="index.html">Documentation</a></li>
            <!-- <li class="disabled"><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Edgar Apaza Choque<b class="caret"></b></a>
              <ul role="menu" class="dropdown-menu">
                <li class="dropdown-header">Configuracion</li>
                <li class="divider"></li>
                <li class="disabled"><a href="#">Salir</a></li>
              </ul>
            </li>
          </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--header-->
        <div class="container-fluid">
          <!--documents-->
          <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
              <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>ADMINISTRADOR SISTEMA</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Buscar"></li>
                <li class="list-group-item"><a href="index.php"><i class="glyphicon glyphicon-th-large"></i>Dashboard </a></li>
                
                <li>
                  <a href="#institucion" class="list-group-item glyphicon glyphicon-home" data-toggle="collapse"> Institucional  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <li class="collapse" id="institucion">
                    <a class="list-group-item" href="institucion.php">Datos Institucionales</a>
                    <a class="list-group-item" href="uniorganica.php">Unidad Organica</a>
                    <a class="list-group-item" href="gerencia.php">Nueva Gerencia</a>
                    <a class="list-group-item" href="subgerencia.php">Nueva sub gerencia</a>
                    <a class="list-group-item" href="areas.php">Nueva Area</a>
                    <a class="list-group-item" href="cargos.php">Nuevo cargo</a>
                    <a class="list-group-item" href="personal2.php">Nuevo Personal</a>
                    <a class="list-group-item" href="metas.php">Nueva metas</a>
                    <a class="list-group-item" href="asignarTareas.php">Nueva Actividades</a>
                  </li>
                </li>
                <li>
                  <a href="#listado" class="list-group-item glyphicon glyphicon-list-alt" data-toggle="collapse"> Listados  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <li class="collapse" id="listado">
                    <a class="list-group-item" href="listagerencias.php">Listado Gerencias</a>
                    <a class="list-group-item" href="listaOficinas.php">Listado Sub Gerencias</a>
                    <a class="list-group-item" href="listaAreas.php">Listado Areas</a>
                    <a class="list-group-item" href="listaCargos.php">Listado Cargos</a>
                    <a class="list-group-item" href="listadoActividades.php">Listado Actividades</a>
                  </li>
                </li>
              </ul>
            </div>

            