<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud_model	 extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*
	*Funcion para insertar en la base de datos.
	*/
	function crearSolicitud($data){
		$datos = array(
			'Fecha' => 			$data['fecha'],
			'Hora' => 			$data['hora'],
			'Kilometraje' => 	$data['kilometraje'],
			'idVehiculo' => 	$data['vehiculo'],
			'idUsuario' => 		$data['usuario'],
		 );

		$this->db->insert('solicitudrenta',$datos);

	}

	/*
	*Funcion para cargar todas las solicitudes de renta de la base de datos.
	*/
	function cargarSolicitudes(){
		$query = $this->db->get('solicitudrenta');
		if($query->num_rows() > 0) return $query;
		else return false;
	}


	/*
	*Funcion para cargar una solicitud de renta de la base de datos.
	*/
	function cargarSolicitud($id){
		$this->db->where('idSolicitudRenta',$id);
		$query = $this->db->get('solicitudrenta');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	/*
	*Funcion para actualziar una solicitud de renta en la base de datos.
	*/
	function actualizarSolicitud($id,$data){

		$data = array(
			'Fecha' => 			$data['fecha'],
			'Hora' => 			$data['hora'],
			'Kilometraje' => 	$data['kilometraje'],
			'idVehiculo' => 	$data['vehiculo'],
			'idUsuario' => 		$data['usuario'],
		 );

		$this->db->where('idSolicitudRenta',$id);

		$query = $this->db->update('solicitudrenta',$data);
	}

	/*
	*Funcion para eliminar una solicitud de renta.
	*/
	function eliminarSolicitud($id){
		$this->db->delete('solicitudrenta',array('idSolicitudRenta'=>$id));

	}
}

?>