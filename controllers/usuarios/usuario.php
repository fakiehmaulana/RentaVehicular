<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('usuarios/usuario_model');
	}
	function index(){
		$this->load->view('usuario/header');
	}
	function nuevo(){
		$this->load->view('usuario/header');
		$this->load->view('usuario/formularioUsuario');
	}
	function recibirdatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'cedula' => $this->input->post('cedula'),
			'licencia' => $this->input->post('licencia'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
			);
		
		$this->usuario_model->crearUsuario($data);
		$this->load->view('usuario/header');
		$this->load->view('usuario/formularioUsuario');
	}
}
?>
