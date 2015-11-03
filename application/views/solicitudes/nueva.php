  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Solicitud de Renta</h3>
        </div>
        <div class="panel-body">
<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/solicitudes/solicitud/recibirdatos") ?>

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

	$vehiculo =	array(
		'name' => 'vehiculo',
		'placeholder' => 'ID del vehiculo'
		);

	$usuario = array(
		'name' => 'usuario',
		'placeholder' => 'id del usuario'
		);
 ?>

<div class='form-group'>
 	<?= form_label('Fecha:','fecha') ?>
 	<?= form_input($fecha) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Hora:','hora') ?>
 	<?= form_input($hora) ?>
 </div>


<div class='form-group'>
 	<?= form_label('Kilometraje:','kilometraje') ?>
 	<?= form_input($kilometraje) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Vehiculo:','vehiculo') ?>
 	<?= form_input($vehiculo) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Usuario:','usuario') ?>
 	<?= form_input($usuario) ?>
 	</div>

	<?= form_submit('','Crear')?>
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