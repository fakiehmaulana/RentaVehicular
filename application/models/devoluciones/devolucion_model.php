<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Devolucion_model	 extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*
	*Funcion para insertar en la base de datos.
	*/
	function crearDevolucion($data){
		$datos = array(
			'Fecha' => 			$data['fecha'],
			'Hora' => 			$data['hora'],
			'Kilometraje' => 	$data['kilometraje'],
			'estado' => 		$data['estado'],
			'observaciones' => 	$data['observaciones'],
			'idVehiculo' => 	$data['vehiculo'],
			'idUsuario' => 		$data['usuario'],
		 );

		$this->db->insert('devolucionrenta',$datos);

	}

	/*
	*Funcion para cargar todas las devoluciones de renta de la base de datos.
	*/
	function cargarDevoluciones(){
		$query = "SELECT *, (SELECT placa from vehiculo where vehiculo.idvehiculo = devolucionrenta.idvehiculo) as placa,
					(select cedula from usuario where usuario.idusuario = devolucionrenta.idusuario) as cedula
 					from devolucionrenta";
 		$query = $this->db->query($query);
		if($query->num_rows() > 0) return $query;
		else return false;
	}


	/*
	*Funcion para cargar una devolucion de renta de la base de datos.
	*/
	function cargarDevolucion($id){
		$this->db->where('idDevolucionRenta',$id);
		$query = $this->db->get('devolucionrenta');
		if($query->num_rows() > 0) return $query;
		else return false;
	}


	/*
	*Funcion para actualziar una devolucion de renta en la base de datos.
	*/
	function actualizarDevolucion($id,$data){

		$data = array(
			'Fecha' => 			$data['fecha'],
			'Hora' => 			$data['hora'],
			'Kilometraje' => 	$data['kilometraje'],
			'estado' => 		$data['estado'],
			'observaciones' => 	$data['observaciones'],
			'idVehiculo' => 	$data['vehiculo'],
			'idUsuario' => 		$data['usuario'],
		 );

		$this->db->where('idDevolucionRenta',$id);

		$query = $this->db->update('devolucionrenta',$data);
	}

	/*
	*Funcion para eliminar una devolucion de renta.
	*/
	function eliminarDevolucion($id){
		$this->db->delete('devolucionrenta',array('idDevolucionRenta'=>$id));

	}
}

?>