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
			<center>Licencia</center>
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
</body>
</html>
