<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class usuario_model	 extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function crearUsuario($data){
		$datos = array('nombre' => $data['nombre'], 'cedula' => $data['cedula'], 'licencia' => $data['licencia'],
			'telefono' => $data['telefono'],
			'direccion' => 	$data['direccion']
			);

		$this->db->insert('rentavehicular' , $datos);
	}
}

?>
