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
	
	//Me carga solo el vehiculo estipulado por el ID
	function cargarVehiculo($id){
		$this->db->where('idVehiculo',$id);
		$query = $this->db->get('vehiculo');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
}
?>