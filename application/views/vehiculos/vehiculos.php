<table width='90%' border='1' align='center'>
	<tr>
		<td>
			<center>No</center>
		</td>
		<td>
			<center>Tipo</center>
		</td>
		<td>
			<center>Foto</center>
		</td>
		<td>
			<center>Marca</center>
		</td>
		<td>
			<center>Capacidad</center>
		</td>
		<td>
			<center>Precio</center>
		</td>
		<td>
			<center>Disponibilidad</center>
		</td>
		<td>
			<center>Color</center>
		</td>
		<td>
			<center>Modelo</center>
		</td>
		<td>
			<center>Placa</center>
		</td>
		<td>
			<center>Kilometraje</center>
		</td>
	</tr>

<?php
if($vehiculos){
 foreach ($vehiculos->result() as $vehiculo) { ?>
		<tr>
			<td>
				<?= $vehiculo->idVehiculo;  ?>
			</td>
			<td>
				<?= $vehiculo->Tipo;  ?>
			</td>
			<td>
				<?= $vehiculo->urlFoto;  ?>
			</td>
			<td>
				<?= $vehiculo->Marca;  ?>
			</td>
			<td>
				<?= $vehiculo->Capacidad;  ?>
			</td>
			<td>
				<?= $vehiculo->Precio;  ?>
			</td>
			<td>
				<?= $vehiculo->Disponibilidad;  ?>
			</td>
			<td>
				<?= $vehiculo->Color;  ?>
			</td>
			<td>
				<?= $vehiculo->Modelo;  ?>
			</td>
			<td>
				<?= $vehiculo->Placa;  ?>
			</td>
			<td>
				<?= $vehiculo->Kilometraje;  ?>
			</td>
		</tr>


	<?php }
}
	 ?>

</table>
</body>
</html>
