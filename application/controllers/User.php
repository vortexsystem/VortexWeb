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
$data = array(
        'base_href' => base_url(),
        'page_title' => 'Home',
        'message' => ''
);
	$this->load->view('user/login', $data);	
  } 
  public function process(){
     $this->load->model('User_model', 'auth');

	$user = $this->input->post('user');
	$password = $this->input->post('password');
$words = explode(' ', $user);
$word = array_pop($words);
$first_chunk = implode(' ', $words);
	$light = $this->auth->login($first_chunk , $word, $password);
	if($light == "FALSE")
	{
         $data = array(
        'base_href' => base_url(),
        'page_title' => 'Login',
        'message' => 'Invalid Username or Password'
);

	$this->load->view('user/login', $data);
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
    redirect('/user/login');
  }
public function forgot(){
$data = array(
        'base_href' => base_url(),
        'page_title' => 'Forgot Password',
);	
	
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            
            if($this->form_validation->run() == FALSE) {
		$this->load->view('user/forgot', $data);
	    }
            
  } 	


}
?>
