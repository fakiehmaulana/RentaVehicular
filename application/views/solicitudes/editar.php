  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Editar Solicitud</h3>
        </div>
        <div class="panel-body">



 <?php

if($solicitud){ ?>

<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/solicitudes/solicitud/actualizar/".$solicitud->result()[0]->idSolicitudRenta) ?>

<?php
	/*
	*Variables cargadas para imprimir codigo html dentro de los labels.
	*/
	$fecha = array(
		'name' => 'fecha',
		 'placeholder' => 'dd/mm/yyyy',
		 'value' => $solicitud->result()[0]->Fecha
		 );

	$hora =	array(
		'name' => 'hora',
		'placeholder' => 'hh:mm',
		'value' => $solicitud->result()[0]->Hora
		);

	$kilometraje =	array(
		'name' => 'kilometraje',
		'placeholder' => 'Kilometraje',
		'value' => $solicitud->result()[0]->Kilometraje
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
 					if($vehiculo->idVehiculo!=$solicitud->result()[0]->idVehiculo){
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
 					if($usuario->idUsuario!=$solicitud->result()[0]->idUsuario){
						echo '<option value="'.$usuario->idUsuario.'">'.$usuario->cedula.'</option>';
 					}else{
						echo '<option value="'.$usuario->idUsuario.'" selected>'.$usuario->cedula.'</option>';
 					}
 				}

 			}
 		?>
 	</select>	
 	</div>

	<?= form_submit('','Actualizar')?>
 <?= form_close() ?>


 <?php 
}else{
	echo"Error al cargar la solicitud";
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