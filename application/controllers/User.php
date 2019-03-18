<?php
class User extends CI_Controller
{
  
  public function index(){
    redirect('/');
  }
 
  public function login(){
	$this->load->view('user/login');	
  } 
  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
?>