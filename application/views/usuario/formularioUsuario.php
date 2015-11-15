  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Agregar Cliente</h3>
        </div>
        <div class="panel-body">

<?= form_open("/usuarios/usuario/recibirdatos") ?>
<?php
	$nombre = array(
		'name' => 'nombre' ,
		'placeholder' => 'Escribe tu nombre'
	);
	$cedula = array(
		'name' => 'cedula' ,
		'placeholder' => 'Numero de cedula'
	);
	$licencia = array(
		'name' => 'licencia' ,
		'placeholder' => 'Numero de licencia'
	);
	$telefono = array(
		'name' => 'telefono' ,
		'placeholder' => 'Escribe tu telefono'
	);
	$direccion = array(
		'name' => 'direccion' ,
		'placeholder' => 'Escribe tu direccion'
	);
	$email = array(
		'name' => 'email' ,
		'placeholder' => 'Escribe tu correo'
	);
?>
<div class='form-group'>
	<?= form_label('Nombre:' , 'nombre') ?>
	<?= form_input($nombre) ?>
  </div>

<div class='form-group'>
	<?= form_label('Cedula:' , 'cedula') ?>
	<?= form_input($cedula) ?>
  </div>

<div class='form-group'>
	<?= form_label('Licencia:' , 'licencia') ?>
	<?= form_input($licencia) ?>
  </div>

<div class='form-group'>
	<?= form_label('Email:' , 'email') ?>
	<?= form_input($email) ?>
  </div>

<div class='form-group'>
	<?= form_label('Telefono:' , 'telefono') ?>
	<?= form_input($telefono) ?>
  </div>

<div class='form-group'>
	<?= form_label('Direccion:' , 'direccion') ?>
	<?= form_input($direccion) ?>
  </div>
	<br><br><br>

	<?= form_submit('','Agregar')?>
<?= form_close() ?>

</div>
</div>
</div>


				</div>
	</div> <!— /container —>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src=<?= base_url('bootstrap/js/bootstrap.min.js'); ?> ></script>
      <script src=<?= base_url('bootstrap/js/bootstrap1.min.js'); ?> ></script>
</body>
</html>