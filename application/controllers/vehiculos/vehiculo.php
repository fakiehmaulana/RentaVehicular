<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed...');
class Vehiculo extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('vehiculos/vehiculo_model');
	}
	
	function index(){
		$data['vehiculos'] = $this->vehiculo_model->cargarVehiculos();
		$this->load->view('header');
		$this->load->view('vehiculos/vehiculos',$data);
	}
	//Carga la vista para agragar un nuevo vehiculo
	function nuevoVehiculo(){
		$this->load->view('header');
		$this->load->view('vehiculos/nuevoVehiculo');
	}
	
	function recibirDatos(){
		$data = array(
			'tipo' => $this->input->post('tipo'),
			'urlFoto' => $this->input->post('urlFoto'),
			'marca' => $this->input->post('marca'),
			'capacidad' => $this->input->post('capacidad'),
			'precio' => $this->input->post('precio'),
			'disponibilidad' => $this->input->post('disponibilidad'), 
			'color' => $this->input->post('color'),
			'modelo' => $this->input->post('modelo'),  
			'placa' => $this->input->post('placa'),
			'kilometraje' => $this->input->post('kilometraje'), 
			);
		$this->vehiculo_model->crearVehiculo($data);
		$this->load->view('header');
		$this->load->view('vehiculos/nuevoVehiculo');
	}
}
?>