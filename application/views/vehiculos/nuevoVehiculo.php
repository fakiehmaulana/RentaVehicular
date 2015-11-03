<?=
//comando para ejecutar metodo del controlador
 form_open("/vehiculos/vehiculo/recibirdatos") ?>

<?php
	
	$tipo = array(
		'name' => 'tipo',
		 'placeholder' => 'tipo'
		 );
	$urlFoto =	array(
		'name' => 'urlFoto',
		'placeholder' => 'url de la Foto'
		);
	$marca =	array(
		'name' => 'marca',
		'placeholder' => 'marca'
		);
	$capacidad =	array(
		'name' => 'capacidad',
		'placeholder' => 'No Pasajeros'
		);
	$precio = array(
		'name' => 'precio',
		'placeholder' => 'precio/hora'
		);
	$disponibilidad = array(
		'name' => 'disponibilidad',
		'placeholder' => '1: Si, 0: No'
		);
	$color = array(
		'name' => 'color',
		'placeholder' => 'color'
		);
	$modelo = array(
		'name' => 'modelo',
		'placeholder' => 'modelo'
		);
	$placa = array(
		'name' => 'placa',
		'placeholder' => 'LLLNNN'
		);
	$kilometraje = array(
		'name' => 'kilometraje',
		'placeholder' => 'kilometraje'
		);
 ?>

 	<?= form_label('Tipo:','tipo') ?>
 	<?= form_input($tipo) ?>
 	<br>

 	<?= form_label('URl Foto:','urlFoto') ?>
 	<?= form_input($urlFoto) ?>
 	<br>

 	<?= form_label('Marca:','marca') ?>
 	<?= form_input($marca) ?>
 	<br>

 	<?= form_label('Capacidad:','capacidad') ?>
 	<?= form_input($capacidad) ?>
 	<br>

 	<?= form_label('Precio:','precio') ?>
 	<?= form_input($precio) ?>
 	<br>

 	<?= form_label('Disponibilidad:','disponibilidad') ?>
 	<?= form_input($disponibilidad) ?>
 	<br>
 	<?= form_label('Color:','color') ?>
 	<?= form_input($color) ?>
 	<br>
 	<?= form_label('Modelo:','modelo') ?>
 	<?= form_input($modelo) ?>
 	<br>
 	<?= form_label('Placa:','placa') ?>
 	<?= form_input($placa) ?>
 	<br>
 	<?= form_label('Kilometraje:','kilometraje') ?>
 	<?= form_input($kilometraje) ?>
 	<br><br><br>

	<?= form_submit('','Agregar')?>
 <?= form_close() ?>

</body>
</html>
