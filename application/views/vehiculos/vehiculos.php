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
			<td>
				<a href="<?= base_url("/vehiculos/vehiculo/editar/".$vehiculo->idVehiculo);  ?>">
					Editar
			</a>
			</td>
			<td>
				<a href="<?= base_url("/vehiculos/vehiculo/eliminar/".$vehiculo->idVehiculo);  ?>"
				 onclick="return confirm('Desea Eliminar este vehiculo?')">
					Eliminar
			</a>
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