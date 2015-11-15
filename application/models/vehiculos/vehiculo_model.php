<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vehiculo_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	//insertar nuevo vehiculo en la BD
	function crearVehiculo($data){
		$datos = array(
			'tipo' => $data['tipo'],
			'urlFoto' => $data['urlFoto'],
			'marca' => $data['marca'],
			'capacidad' => $data['capacidad'],
			'precio' => $data['precio'],
			'disponibilidad' => $data['disponibilidad'],
			'color' => $data['color'],
			'modelo' => $data['modelo'],
			'placa' => $data['placa'],
			'kilometraje' => $data['kilometraje'],
		 );
		$this->db->insert('vehiculo',$datos);
	}
	//Carga todos los vehiculos en la BD
	function cargarVehiculos(){
		$query = $this->db->get('vehiculo');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	
	/*
	*Funcion para cargar un vehiculo de la base de datos.
	*/
	function cargarVehiculo($id){
		$this->db->where('idVehiculo',$id);
		$query = $this->db->get('vehiculo');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	/*
	*Funcion para actualizar un vehiculo en la base de datos.
	*/
	function actualizarvehiculo($id,$data){

		$data = array(
			'tipo' => $data['tipo'],
			'urlFoto' => $data['urlFoto'],
			'marca' => $data['marca'],
			'capacidad' => $data['capacidad'],
			'precio' => $data['precio'],
			'disponibilidad' => $data['disponibilidad'],
			'color' => $data['color'],
			'modelo' => $data['modelo'],
			'placa' => $data['placa'],
			'kilometraje' => $data['kilometraje'],
		 );

		$this->db->where('idVehiculo',$id);

		$query = $this->db->update('vehiculo',$data);
	}

	/*
	*Funcion para eliminar un vehiculo.
	*/
	function eliminarVehiculo($id){
		$this->db->delete('vehiculo',array('idVehiculo'=>$id));

	}
}
?>