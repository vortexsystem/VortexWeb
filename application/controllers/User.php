<?php
class User extends CI_Controller
{
  

    function __construct()
      {
        parent::__construct();
	 	$this->load->helper('url');
		$this->load->database('robust');	   
      }


  public function index(){
    redirect('/');
  }
 
  public function login(){
	$this->load->view('user/login');	
  } 
  public function process(){
     $this->load->model('User_model', 'auth');

	$first = $this->input->post('first');
	$last = $this->input->post('last');
	$password = $this->input->post('password');
	$light = $this->auth->login($first , $last, $password);
	if($light == "FALSE")
	{
	 redirect('/user/login');
	}
	else
	{
	$newdata = array(
        'uuid'  => $light,
        'name'     => $first . '.' . $last,
        'logged_in' => TRUE
);

$this->session->set_userdata($newdata);
redirect('/');
	}
		
  } 
  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
?>