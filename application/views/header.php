<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>QUINDI-CAR</title>
    <link rel="shortcut icon" href=<?= base_url('img/icono1.PNG'); ?> type="image/png" />
    
    <!—[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]—>
    
    <link href=<?= base_url('bootstrap/css/bootstrap.min.css'); ?> rel="stylesheet">
     <link href=<?= base_url('bootstrap/css/bootstrap1.min.css'); ?> rel="stylesheet">
     <LINK REL="stylesheet" TYPE="text/css" HREF=<?= base_url('css/main.css'); ?> >
    <style>
      body { padding-top: 60px; }
    </style>
    <link href=<?= base_url('bootstrap/css/bootstrap-responsive.min.css'); ?> rel="stylesheet">
  </head>
  <body background=<?= base_url('img/fondo6.jpg'); ?> >
  	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">QUINDI-CAR</a>
      <div class="nav-collapse">
        <ul class="nav nav-tabs">
          <li class="active"><a href=<?= base_url('ver_vehiculos'); ?> >Home</a></li>
          
          <li class="#"><a href="">Iniciar Sesión </a></li>

      <li class="dropdown">
        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Vehiculos<span class="caret"></span></a>
           <ul class="dropdown-menu">
        <li><a href=<?= base_url('nuevo_vehiculo'); ?> >Agregar Vehiculos</a></li>
        <li><a href=<?= base_url('ver_vehiculos'); ?>>Visualizar Vehiculos</a></li>
        
        </ul>
          </li>

          <li class="dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">Clientes<span class="caret"></span></a>
           <ul class="dropdown-menu">
    		 <li><a href=<?= base_url('nuevo_cliente'); ?> >Crear Cliente</a></li>
        <li><a href=<?= base_url('ver_clientes'); ?>>Visualizar Clientes</a></li>
    		
    	  </ul>
          </li>

          <li class="dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
           <ul class="dropdown-menu">
        <li><a href=<?= base_url('nueva_solicitud'); ?> >Crear Solicitud</a></li>
        <li><a href=<?= base_url('ver_solicitudes'); ?>>Visualizar Solicitudes</a></li>
        
        </ul>
          </li>

        <li class="dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">Devoluciones<span class="caret"></span></a>
           <ul class="dropdown-menu">
        <li><a href=<?= base_url('nueva_devolucion'); ?> >Crear Devolucion</a></li>
        <li><a href=<?= base_url('ver_devoluciones'); ?>>Visualizar Devoluciones</a></li>
        
        </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

	<div class="container">
  			

 		<div class="hero-unit">
  			<h1>Bienvenidos a QUINDI-CAR!</h1>
  			<p>Bienvenidos a nuestro sitio web donde nuestra oferta será tenerle los mejores carros a su disposición 
  			las 24 horas del día para su comidad y seguridad cualquiera de nuestros carros cuenta con las mejores
  			estandares de alineación y balanceo</p>
  			<p><a class="btn btn-primary btn-large">Más información</a></p>
		</div>
