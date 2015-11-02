<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('solicitudes/solicitud_model');
	}

	
	function index(){
		$data['solicitudes'] = $this->solicitud_model->cargarSolicitudes();
		$this->load->view('solicitudes/header');
		$this->load->view('solicitudes/solicitudes',$data);
	}

	/*
	*Funcion para cargar la vista nueva para ingresar solicitudes.
	*/
	function nueva(){
		$this->load->view('solicitudes/header');
		$this->load->view('solicitudes/nueva');
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
		$this->load->view('solicitudes/header');
		$this->load->view('solicitudes/nueva');
	}

}

?>
