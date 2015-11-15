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
		redirect(base_url('ver_vehiculos'));
	}

	/*
	*Funcion para abrir la vista de editar de los datos de un vehiculo.
	*/
	function editar(){
		$data['idVehiuclo'] = $this->uri->segment(4);
		$data['vehiculo'] = $this->vehiculo_model->cargarVehiculo($data['idVehiuclo']);
		$this->load->view('header');
		$this->load->view('vehiculos/editar',$data);
	}

	/*
	*Funcion para actualizar un vehiculo.
	*/
	function actualizar(){
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

		$this->vehiculo_model->actualizarVehiculo($this->uri->segment(4),$data);
		redirect(base_url('ver_vehiculos'));

	}


	/*
	*Funcion para eliminar un vehiculo.
	*/
	function eliminar(){
		$id = $this->uri->segment(4);
		$this->vehiculo_model->eliminarVehiculo($id);
		redirect(base_url('ver_vehiculos'));
	}



}
?>