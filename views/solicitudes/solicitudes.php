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
	</tr>

<?php

if($solicitudes){
	
 foreach ($solicitudes->result() as $solicitud) { ?>
		<tr>
			<td>
				<?= $solicitud->idSolicitudRenta;  ?>
			</td>
			<td>
				<?= $solicitud->idUsuario;  ?>
			</td>
			<td>
				<?= $solicitud->idVehiculo;  ?>
			</td>
			<td>
				<?= $solicitud->Kilometraje;  ?>
			</td>
			<td>
				<?= $solicitud->Fecha;  ?>
			</td>
			<td>
				<?= $solicitud->Hora;  ?>
			</td>
		</tr>


	<?php }
}
	 ?>

</table>
</body>
</html>
