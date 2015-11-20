<?php
Class Login extends CI_Model
{
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

 function login($username, $password)
 {
   $this -> db -> select('idLogin, usuario, contrasenia');
   $this -> db -> from('login');
   $this -> db -> where('usuario', $username);
   $this -> db -> where('contrasenia', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>