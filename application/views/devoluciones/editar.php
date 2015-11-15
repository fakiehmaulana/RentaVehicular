  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Editar Devolucion</h3>
        </div>
        <div class="panel-body">



 <?php

if($devolucion){ ?>

<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/devoluciones/devolucion/actualizar/".$devolucion->result()[0]->idDevolucionRenta) ?>

<?php
	/*
	*Variables cargadas para imprimir codigo html dentro de los labels.
	*/
	$fecha = array(
		'name' => 'fecha',
		 'placeholder' => 'dd/mm/yyyy',
		 'value' => $devolucion->result()[0]->Fecha
		 );

	$hora =	array(
		'name' => 'hora',
		'placeholder' => 'hh:mm',
		 'value' => $devolucion->result()[0]->Hora
		);

	$kilometraje =	array(
		'name' => 'kilometraje',
		'placeholder' => 'Kilometraje',
		 'value' => $devolucion->result()[0]->Kilometraje
		);

	$estado =	array(
		'name' => 'estado',
		'placeholder' => 'estado del vehiculo',
		 'value' => $devolucion->result()[0]->estado
		);

	$observaciones = array(
		'name' => 'observaciones',
		'placeholder' => 'observaciones sobre el vehiculo',
		 'value' => $devolucion->result()[0]->Observaciones
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
 					if($vehiculo->idVehiculo!=$devolucion->result()[0]->idVehiculo){
						echo '<option value="'.$vehiculo->idVehiculo.'">'.$vehiculo->Placa.'</option>';
 					}else{
						echo '<option value="'.$vehiculo->idVehiculo.'" selected>'.$vehiculo->Placa.'</option>';
 					}
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
 					if($usuario->idUsuario!=$devolucion->result()[0]->idUsuario){
						echo '<option value="'.$usuario->idUsuario.'">'.$usuario->cedula.'</option>';
 					}else{
						echo '<option value="'.$usuario->idUsuario.'" selected>'.$usuario->cedula.'</option>';
 					}
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

	<?= form_submit('','Actualizar')?>
 <?= form_close() ?>


 <?php 
}else{
	echo"Error al cargar la devolucion";
}
	 ?>



        		 </div>
</div>
</div>


				</div>
	</div> <!— /container —>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src=<?= base_url('bootstrap/js/bootstrap.min.js'); ?> ></script>
      <script src=<?= base_url('bootstrap/js/bootstrap1.min.js'); ?> ></script>

</table>
</body>
</html>