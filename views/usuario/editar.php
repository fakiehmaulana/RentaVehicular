<?= form_open("/usuarios/usuario/actualizar/ ".$id) ?>
<?php 
	$nombre = array(
		'name' => 'nombre' ,
		'placeholder' => 'Escribe tu nombre' , 
		'value' => $usuario->result()[0]->nombre  
	);
	$cedula = array(
		'name' => 'cedula' ,
		'placeholder' => 'Numero de cedula' ,
		'value' => $usuario->result()[0]->cedula
	);
	$telefono = array(
		'name' => 'telefono' ,
		'placeholder' => 'Escribe tu telefono' ,
		'value' => $usuario->result()[0]->telefono
	);
	$direccion = array(
		'name' => 'direccion' ,
		'placeholder' => 'Escribe tu direccion' ,
		'value' => $usuario->result()[0]->direccion
	);
	$email = array(
		'name' => 'email' ,
		'placeholder' => 'Escribe tu correo' ,
		'value' => $usuario->result()[0]->email
	);
	$licenciaConduccion = array(
		'name' => 'licencia' ,
		'placeholder' => 'Escribe el numero de tu licencia' ,
		'value' => $usuario->result()[0]->licenciaConduccion
	);
?>

<?= form_label('Nombre:' , 'nombre') ?>
	<?= form_input($nombre) ?>
	<br>

	<?= form_label('Cedula:' , 'cedula') ?>
	<?= form_input($cedula) ?>
	<br>

	<?= form_label('Licencia:' , 'licenciaConduccion') ?>
	<?= form_input($licenciaConduccion) ?>
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

	<?= form_submit('','Actualizar Usuario')?>
<?= form_close() ?>
</body>
</html>
