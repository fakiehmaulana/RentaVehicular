  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Vehiculos</h3>
        </div>
        <div class="panel-body">
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
				<center><?= $vehiculo->idVehiculo;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Tipo;  ?></center>
			</td>
			<td>
				<center><img src="<?= base_url('/img/'.$vehiculo->urlFoto)  ?>" width="50%" height="50%" class="img-rounded"></center>
			</td>
			<td>
				<center><?= $vehiculo->Marca;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Capacidad;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Precio;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Disponibilidad;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Color;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Modelo;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Placa;  ?></center>
			</td>
			<td>
				<center><?= $vehiculo->Kilometraje;  ?></center>
			</td>
			<td>
				<center><a href="<?= base_url("/vehiculos/vehiculo/editar/".$vehiculo->idVehiculo);  ?>">
					Editar
			</a></center>
			</td>
			<td>
				<center><a href="<?= base_url("/vehiculos/vehiculo/eliminar/".$vehiculo->idVehiculo);  ?>"
				 onclick="return confirm('Desea Eliminar este vehiculo?')">
					Eliminar
			</a></center>
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