  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Solicitudes de Renta</h3>
        </div>
        <div class="panel-body">
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
				<center><?= $solicitud->idSolicitudRenta;  ?></center>
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
			<td>
				<a href="<?= base_url("/solicitudes/solicitud/editar/".$solicitud->idSolicitudRenta);  ?>">
					Editar
			</a>
			</td>
			<td>
				<a href="<?= base_url("/solicitudes/solicitud/eliminar/".$solicitud->idSolicitudRenta);  ?>"
				 onclick="return confirm('Desea Eliminar esta solicitud?')">
					Eliminar
			</a>
			</td>
		</tr>


	<?php }
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