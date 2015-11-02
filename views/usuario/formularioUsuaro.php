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
	<?= form_label('Nombre:' , 'nombre') ?>
	<?= form_input($nombre) ?>
	<br>

	<?= form_label('Cedula:' , 'cedula') ?>
	<?= form_input($cedula) ?>
	<br>

	<?= form_label('Licencia:' , 'licencia') ?>
	<?= form_input($licencia) ?>
	<br>

	<?= form_label('Email:' , 'email') ?>
	<?= form_input($email) ?>
	<br>

	<?= form_label('Telefono:' , 'telefono') ?>
	<?= form_input($telefono) ?>
	<br>

	<?= form_label('Direccion:' , 'direccion') ?>
	<?= form_input($direccion) ?>
	<br><br><br>

	<?= form_submit('','Registrar')?>
<?= form_close() ?>

</body>
</html>
