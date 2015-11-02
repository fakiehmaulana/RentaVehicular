<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model	 extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

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
}
?>
