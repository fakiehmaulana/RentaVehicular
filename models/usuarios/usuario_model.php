<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model	 extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

/*
	*Funcion para crear el usuario en la base de datos
	*/
	function crearUsuario($data){
		$datos = array(
			'nombre' => $data['nombre'], 
			'cedula' => $data['cedula'], 
			'licenciaConduccion' => $data['licenciaConduccion'],
			'email' => $data['email'],
			'telefono' => $data['telefono'],
			'direccion' => 	$data['direccion']
			);
		$this->db->insert('usuario' , $datos);
	}

	/*
	*Funcion para cargar los usuarios que se encuentran en la base de datos
	*/
	function obtenerUsuarios(){
		$query = $this->db->get('usuario');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function obtenerUsuario($id){
		$this->db->where('idUsuario' , $id);
		$query = $this->db->get('usuario');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function actualizarUsuario($id , $data){
		$datos = array(
			'nombre' => $data['nombre'], 
			'cedula' => $data['cedula'], 
			'licenciaConduccion' => $data['licenciaConduccion'],
			'email' => $data['email'],
			'telefono' => $data['telefono'],
			'direccion' => 	$data['direccion']
			);
		$this->db->where('idUsuario' , $id);
		$query = $this->db->update('usuario' , $datos);
	}
	function eliminarUsuario($id){
		$this->db->delete('usuario', array('idUsuario' => $id));
	}
}
?>
