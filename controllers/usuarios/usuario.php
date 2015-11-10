<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('usuarios/usuario_model');
	}
	/*
	*Funcion que carga la vista 
	*/
	function index(){
		$data ['segmento'] = $this->uri->segment(4);
		$this->load->view('header');
		if(!$data['segmento']){
			$data['usuarios'] = $this->usuario_model-> obtenerUsuarios();
		
		}
		else {
			$data['usuarios'] = $this->usuario_model->obtenerUsuario($data ['segmento']);
		}
		
		$this->load->view('usuario/usuarios' , $data);
	}
	/*
	* Funcion que sirve para cargar la vista del formulario para crear usuarios
	*/
	function nuevo(){
		$this->load->view('header');
		$this->load->view('usuario/formularioUsuario');
	}
	
	/*
	*Funcion que sirve para recibir los datos de un formulario que llama este metodo
	*Se llama al modelo de usuarios y se inserta los datos en la base de datos
	*Se carga la vista indicada
	*/
	function recibirdatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'cedula' => $this->input->post('cedula'),
			'licenciaConduccion' => $this->input->post('licenciaConduccion'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
			);
		
		$this->usuario_model->crearUsuario($data);
		$this->load->view('header');
		$this->load->view('usuario/formularioUsuario');
	}

	function editar(){
		$data['id'] = $this->uri->segment(4);
		$data['usuario'] = $this->usuario_model->obtenerUsuario($data['id']);
		$this->load->view('header');
		$this->load->view('usuario/editar' , $data);
	}
	function borrar(){
		$id = $this->uri->segment(4);
		$this->usuario_model->eliminarUsuario($id);
		
	}
	function actualizar(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'cedula' => $this->input->post('cedula'),
			'licenciaConduccion' => $this->input->post('licenciaConduccion'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
			);
		$this->usuario_model->actualizarUsuario($this->uri->segment(4),$data);
		$this->load->view('header');
	}
}
?>
