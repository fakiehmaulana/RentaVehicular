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
		else return fasle;
	}
}
?>