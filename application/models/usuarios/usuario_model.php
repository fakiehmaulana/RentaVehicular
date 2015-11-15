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
			'licenciaConduccion' => $data['licencia'],
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

	/*
	*Funcion para cargar un usuario de la base de datos.
	*/
	function cargarUsuario($id){
		$this->db->where('idUsuario',$id);
		$query = $this->db->get('usuario');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	/*
	*Funcion para actualizar un usuario en la base de datos.
	*/
	function actualizarUsuario($id,$data){

		$data = array(
			'nombre' => $data['nombre'], 
			'cedula' => $data['cedula'], 
			'licenciaConduccion' => $data['licencia'],
			'email' => $data['email'],
			'telefono' => $data['telefono'],
			'direccion' => 	$data['direccion']
			);

		$this->db->where('idUsuario',$id);

		$query = $this->db->update('usuario',$data);
	}

	/*
	*Funcion para eliminar un usuario.
	*/
	function eliminarUsuario($id){
		$this->db->delete('usuario',array('idUsuario'=>$id));

	}
}
?>