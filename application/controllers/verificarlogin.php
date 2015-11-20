<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerificarLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('login','',TRUE);
   $this->load->helper('form');
 }
 
 function index()
 {
   //Metodo para las credenciales de validacion
   
  
   if($this->check_database())
   {
    //Area privada (login)
     redirect(base_url('home'), 'refresh');
     
   }
   else
   {
     //Campo de validacion fallido. Usuario redireccionado a la pagina de inicio
     $this->load->view('login');
   }
 
 }
 
 function check_database()
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('usuario');
   $password = $this -> input ->post('password');
   //query the database
   $result = $this->login->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->idLogin,
         'username' => $row->usuario
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     
     return false;
   }
 }
}
?>