<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Devolucion extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('devoluciones/devolucion_model');
		$this->load->model('usuarios/usuario_model');
		$this->load->model('vehiculos/vehiculo_model');
	}

	
	function index(){
		$data['devoluciones'] = $this->devolucion_model->cargarDevoluciones();
		$this->load->view('header');
		$this->load->view('devoluciones/devoluciones',$data);
	}

	/*
	*Funcion para cargar la vista nueva para ingresar devoluciones.
	*/
	function nueva(){
		$data = array(
			'usuarios' => $this->usuario_model->obtenerUsuarios(),
			'vehiculos' => $this->vehiculo_model->cargarVehiculos()
		 );
		$this->load->view('header');
		$this->load->view('devoluciones/nueva',$data);
	}


	/*
	*Funcion para recibir datos de un formulario el cual hace el llamado a este metodo.
	*Se hace el llamado al modelo de las devoluciones para insertar los datos en la base de datos.
	*Se redirige a la pagina indicada
	*/
	function recibirDatos(){
		$data = array(
			'fecha' => $this->input->post('fecha'),
			'hora' => $this->input->post('hora'),
			'kilometraje' => $this->input->post('kilometraje'),
			'estado' => $this->input->post('estado'),
			'observaciones' => 	$this->input->post('observaciones'),
			'vehiculo' => $this->input->post('vehiculo'),
			'usuario' => $this->input->post('usuario'), 
			);

		$this->devolucion_model->crearDevolucion($data);
		$this->load->view('header');
		$this->load->view('devoluciones/nueva');
	}

}

?>