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
  

	<div class="container">
  			

 		<div class="hero-unit">
  			<h1>Bienvenidos a QUINDI-CAR!</h1>
  			<p>Bienvenidos a nuestro sitio web donde nuestra oferta será tenerle los mejores carros a su disposición 
  			las 24 horas del día para su comidad y seguridad cualquiera de nuestros carros cuenta con las mejores
  			estandares de alineación y balanceo</p>
		</div>

<div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
<?=
//comando para ejecutar metodo del controlador
 form_open("/verificarlogin") ?>

<?php
  
  $usuario = array(
    'name' => 'usuario',
     'placeholder' => 'Usuario'
     );
  $password =  array(
    'name' => 'password',
    'placeholder' => 'Contrasenia'
    );
  
 ?>

<div class='form-group'>
  <?= form_label('Usuario:','usuario') ?>
  <?= form_input($usuario) ?>
  </div>

<div class='form-group'>
  <?= form_label('Contrasenia:','password') ?>
  <?= form_password($password) ?>
 </div>

  <br><br><br>

  <?= form_submit('','Login')?>
 <?= form_close() ?>

</div>
        </div>
  </div> <!— /container —>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src=<?= base_url('bootstrap/js/bootstrap.min.js'); ?> ></script>
      <script src=<?= base_url('bootstrap/js/bootstrap1.min.js'); ?> ></script>

</body>
</html>