  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Devolucion</h3>
        </div>
        <div class="panel-body">
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

	$estado =	array(
		'name' => 'estado',
		'placeholder' => 'estado del vehiculo'
		);

	$observaciones = array(
		'name' => 'observaciones',
		'placeholder' => 'observaciones sobre el vehiculo'
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
 	<select id="idVehiculo" name="vehiculo">
 		<?php
 			if($vehiculos){
 				foreach ($vehiculos->result() as $vehiculo) {
 					echo '<option value="'.$vehiculo->idVehiculo.'">'.$vehiculo->Placa.'</option>';
 				}

 			}
 		?>
 	</select>
 </div>

<div class='form-group'>
 	<?= form_label('Usuario:','usuario') ?>
 	<select id="idUsuario" name="usuario">
 		<?php
 			if($usuarios){
 				foreach ($usuarios->result() as $usuario) {
 					echo '<option value="'.$usuario->idUsuario.'">'.$usuario->cedula.'</option>';
 				}

 			}
 		?>
 	</select>	
 </div>

<div class='form-group'>
 	<?= form_label('Estado:','estado') ?>
 	<?= form_input($estado) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Observaciones:','observaciones') ?>
 	<?= form_input($observaciones) ?>
</div>
 	<br><br><br>

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