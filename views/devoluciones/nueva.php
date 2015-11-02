<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/devoluciones/devolucion/recibirdatos") ?>

<?php
	/*
	*Variables cargadas para imprimir codigo html dentro de los labels.
	*/
	$fecha = array(
		'name' => 'fecha',
		 'placeholder' => 'dd/mm/yyyy'
		 );

	$hora =	array(
		'name' => 'hora',
		'placeholder' => 'hh:mm'
		);

	$kilometraje =	array(
		'name' => 'kilometraje',
		'placeholder' => 'Kilometraje'
		);

	$estado =	estado(
		'name' => 'vehiculo',
		'placeholder' => 'estado del vehiculo'
		);

	$observaciones = array(
		'name' => 'observaciones',
		'placeholder' => 'observaciones sobre el vehiculo'
		);

	$vehiculo =	array(
		'name' => 'vehiculo',
		'placeholder' => 'ID del vehiculo'
		);

	$usuario = array(
		'name' => 'usuario',
		'placeholder' => 'id del usuario'
		);

 ?>

 	<?= form_label('Fecha:','fecha') ?>
 	<?= form_input($fecha) ?>
 	<br>

 	<?= form_label('Hora:','hora') ?>
 	<?= form_input($hora) ?>
 	<br>

 	<?= form_label('Kilometraje:','kilometraje') ?>
 	<?= form_input($kilometraje) ?>
 	<br>

 	<?= form_label('Vehiculo:','vehiculo') ?>
 	<?= form_input($vehiculo) ?>
 	<br>

 	<?= form_label('Usuario:','usuario') ?>
 	<?= form_input($usuario) ?>
 	<br>

 	<?= form_label('Estado:','estado') ?>
 	<?= form_input($estado) ?>
 	<br>

 	<?= form_label('Observaciones:','observaciones') ?>
 	<?= form_input($observaciones) ?>
 	<br><br><br>

	<?= form_submit('','Crear')?>
 <?= form_close() ?>

</body>
</html>
