  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Listado Clientes</h3>
        </div>
        <div class="panel-body">
<table width='90%' border='1' align='center'>
	<tr>
		<td>
			<center>No</center>
		</td>
		<td>
			<center>Nombre</center>
		</td>
		<td>
			<center>Cedula</center>
		</td>
		<td>
			<center>LicenciaConduccion</center>
		</td>
		<td>
			<center>Email</center>
		</td>
		<td>
			<center>Telefono</center>
		</td>
		<td>
			<center>Direccion</center>
		</td>
	</tr>
	
	
<?php
if($usuarios){
/*
*Mientras el resultado de la busqueda sea diferente de null y sean usuarios se listan los datos del usuario
*/	
 foreach ($usuarios->result() as $usuario) { ?>
		<tr>
			<td>
				<?= $usuario->idUsuario;  ?>
			</td>
			<td>
				<?= $usuario->nombre;  ?>
			</td>
			<td>
				<?= $usuario->cedula;  ?>
			</td>
			<td>
				<?= $usuario->licenciaConduccion;  ?>
			</td>
			<td>
				<?= $usuario->email;  ?>
			</td>
			<td>
				<?= $usuario->telefono;  ?>
			</td>
			<td>
				<?= $usuario->direccion;  ?>
			</td>
		</tr>


	<?php }
}
	 ?>

</table>

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
