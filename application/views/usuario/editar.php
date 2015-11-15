  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Editar Usuario</h3>
        </div>
        <div class="panel-body">



 <?php

if($usuario){ ?>

<?=
/*
Ejecuta el metodo del controlador.
*/
 form_open("/usuarios/usuario/actualizar/".$usuario->result()[0]->idUsuario) ?>

<?php
	/*
	*Variables cargadas para imprimir codigo html dentro de los labels.
	*/
	$nombre = array(
		'name' => 'nombre' ,
		'placeholder' => 'Escribe tu nombre',
		 'value' => $usuario->result()[0]->nombre
	);
	$cedula = array(
		'name' => 'cedula' ,
		'placeholder' => 'Numero de cedula',
		 'value' => $usuario->result()[0]->cedula
	);
	$licencia = array(
		'name' => 'licencia' ,
		'placeholder' => 'Numero de licencia',
		 'value' => $usuario->result()[0]->licenciaConduccion
	);
	$telefono = array(
		'name' => 'telefono' ,
		'placeholder' => 'Escribe tu telefono',
		 'value' => $usuario->result()[0]->telefono
	);
	$direccion = array(
		'name' => 'direccion' ,
		'placeholder' => 'Escribe tu direccion',
		 'value' => $usuario->result()[0]->direccion
	);
	$email = array(
		'name' => 'email' ,
		'placeholder' => 'Escribe tu correo',
		 'value' => $usuario->result()[0]->email
	);
 ?>

<div class='form-group'>
 	<?= form_label('Nombre:' , 'nombre') ?>
	<?= form_input($nombre) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Cedula:' , 'cedula') ?>
	<?= form_input($cedula) ?>
 </div>


<div class='form-group'>
 	<?= form_label('Licencia:' , 'licencia') ?>
	<?= form_input($licencia) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Email:' , 'email') ?>
	<?= form_input($email) ?>
 </div>

<div class='form-group'>
 	<?= form_label('Telefono:' , 'telefono') ?>
	<?= form_input($telefono) ?>
 </div>


<div class='form-group'>
 	<?= form_label('Direccion:' , 'direccion') ?>
	<?= form_input($direccion) ?>
 </div>


	<?= form_submit('','Actualizar')?>
 <?= form_close() ?>


 <?php 
}else{
	echo"Error al cargar el usuario";
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