<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('solicitudes/solicitud_model');
		$this->load->model('usuarios/usuario_model');
		$this->load->model('vehiculos/vehiculo_model');
	}

	
	function index(){
			$data['solicitudes'] = $this->solicitud_model->cargarSolicitudes();
			$this->load->view('header');
			$this->load->view('solicitudes/solicitudes',$data);
	}	

	/*
	*Funcion para cargar la vista nueva para ingresar solicitudes.
	*/
	function nueva(){
		$data = array(
			'usuarios' => $this->usuario_model->obtenerUsuarios(),
			'vehiculos' => $this->vehiculo_model->cargarVehiculos()
		 );
		$this->load->view('header');
		$this->load->view('solicitudes/nueva',$data);
	}


	/*
	*Funcion para recibir datos de un formulario el cual hace el llamado a este metodo.
	*Se hace el llamado al modelo de las solicitudes para insertar los datos en la base de datos.
	*Se redirige a la pagina indicada
	*/
	function recibirDatos(){
		$data = array(
			'fecha' => $this->input->post('fecha'),
			'hora' => $this->input->post('hora'),
			'kilometraje' => $this->input->post('kilometraje'),
			'vehiculo' => $this->input->post('vehiculo'),
			'usuario' => $this->input->post('usuario'), 
			);

		$this->solicitud_model->crearSolicitud($data);
		redirect(base_url('ver_solicitudes'));
	}

	/*
	*Funcion para abrir la vista de editar de los datos de una solicitud.
	*/
	function editar(){
		$data['idSolicitud'] = $this->uri->segment(4);
		$data['solicitud'] = $this->solicitud_model->cargarSolicitud($data['idSolicitud']);
		$data['usuarios'] = $this->usuario_model->obtenerUsuarios();
		$data['vehiculos'] = $this->vehiculo_model->cargarVehiculos();
		$this->load->view('header');
		$this->load->view('solicitudes/editar',$data);
	}

	/*
	*Funcion para actualizar una solicitud.
	*/
	function actualizar(){
		$data = array(
			'fecha' => $this->input->post('fecha'),
			'hora' => $this->input->post('hora'),
			'kilometraje' => $this->input->post('kilometraje'),
			'vehiculo' => $this->input->post('vehiculo'),
			'usuario' => $this->input->post('usuario'), 
			);

		$this->solicitud_model->actualizarSolicitud($this->uri->segment(4),$data);
		redirect(base_url('ver_solicitudes'));

	}


	/*
	*Funcion para eliminar una solicitud.
	*/
	function eliminar(){
		$id = $this->uri->segment(4);
		$this->solicitud_model->eliminarSolicitud($id);
		redirect(base_url('ver_solicitudes'));
	}

}

?>
