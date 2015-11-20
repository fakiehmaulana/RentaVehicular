 <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Editar Vehiculo</h3>
        </div>
        <div class="panel-body">



 <?php

if($vehiculo){ ?>

<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/vehiculos/vehiculo/actualizar/".$vehiculo->result()[0]->idVehiculo) ?>

<?php
	/*
	*Variables cargadas para imprimir codigo html dentro de los labels.
	*/
	$tipo = array(
		'name' => 'tipo',
		 'placeholder' => 'tipo',
		 'value' => $vehiculo->result()[0]->Tipo
		 );
	$urlFoto =	array(
		'name' => 'urlFoto',
		'placeholder' => 'url de la Foto',
		 'value' => $vehiculo->result()[0]->urlFoto
		);
	$marca =	array(
		'name' => 'marca',
		'placeholder' => 'marca',
		 'value' => $vehiculo->result()[0]->Marca
		);
	$capacidad =	array(
		'name' => 'capacidad',
		'placeholder' => 'No Pasajeros',
		 'value' => $vehiculo->result()[0]->Capacidad
		);
	$precio = array(
		'name' => 'precio',
		'placeholder' => 'precio/hora',
		 'value' => $vehiculo->result()[0]->Precio
		);
	$disponibilidad = array(
		'name' => 'disponibilidad',
		'placeholder' => '1: Si, 0: No',
		 'value' => $vehiculo->result()[0]->Disponibilidad
		);
	$color = array(
		'name' => 'color',
		'placeholder' => 'color',
		 'value' => $vehiculo->result()[0]->Color
		);
	$modelo = array(
		'name' => 'modelo',
		'placeholder' => 'modelo',
		 'value' => $vehiculo->result()[0]->Modelo
		);
	$placa = array(
		'name' => 'placa',
		'placeholder' => 'LLLNNN',
		 'value' => $vehiculo->result()[0]->Placa
		);
	$kilometraje = array(
		'name' => 'kilometraje',
		'placeholder' => 'kilometraje',
		 'value' => $vehiculo->result()[0]->Kilometraje
		);
 ?>

<div class='form-group'>
 	<?= form_label('Tipo:','tipo') ?>
 	<?= form_input($tipo) ?>
  </div>

<div class='form-group'>
 	<?= form_label('URl Foto:','urlFoto') ?>
 	<?= form_upload($urlFoto) ?>
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


	<?= form_submit('','Actualizar')?>
 <?= form_close() ?>


 <?php 
}else{
	echo"Error al cargar el vehiculo";
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