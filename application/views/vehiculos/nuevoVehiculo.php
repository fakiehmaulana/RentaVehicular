  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Agregar Vehiculo</h3>
        </div>
        <div class="panel-body">
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

<div class='form-group'>
 	<?= form_label('Tipo:','tipo') ?>
 	<?= form_input($tipo) ?>
  </div>

<div class='form-group'>
 	<?= form_label('URl Foto:','urlFoto') ?>
 	<?= form_input($urlFoto) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Marca:','marca') ?>
 	<?= form_input($marca) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Capacidad:','capacidad') ?>
 	<?= form_input($capacidad) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Precio:','precio') ?>
 	<?= form_input($precio) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Disponibilidad:','disponibilidad') ?>
 	<?= form_input($disponibilidad) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Color:','color') ?>
 	<?= form_input($color) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Modelo:','modelo') ?>
 	<?= form_input($modelo) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Placa:','placa') ?>
 	<?= form_input($placa) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Kilometraje:','kilometraje') ?>
 	<?= form_input($kilometraje) ?>
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