<table width='90%' border='1' align='center'>
	<tr>
		<td>
			<center>No</center>
		</td>
		<td>
			<center>Usuario</center>
		</td>
		<td>
			<center>Vehiculo</center>
		</td>
		<td>
			<center>Kilometraje</center>
		</td>
		<td>
			<center>Fecha</center>
		</td>
		<td>
			<center>Hora</center>
		</td>
		<td>
			<center>Estado</center>
		</td>
		<td>
			<center>Observaciones</center>
		</td>
	</tr>

<?php

if($devoluciones){
	
 foreach ($devoluciones->result() as $devolucion) { ?>
		<tr>
			<td>
				<?= $devolucion->idSolicitudRenta;  ?>
			</td>
			<td>
				<?= $devolucion->idUsuario;  ?>
			</td>
			<td>
				<?= $devolucion->idVehiculo;  ?>
			</td>
			<td>
				<?= $devolucion->Kilometraje;  ?>
			</td>
			<td>
				<?= $devolucion->Fecha;  ?>
			</td>
			<td>
				<?= $devolucion->Hora;  ?>
			</td>
			<td>
				<?= $devolucion->Estado;  ?>
			</td>
			<td>
				<?= $devolucion->Observaciones;  ?>
			</td>
		</tr>


	<?php }
}
	 ?>

</table>
</body>
</html>
