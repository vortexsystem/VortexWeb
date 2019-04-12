<?php
class User extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database('robust');
    }
    public function index()
    {
        redirect('/');
    }
    
    public function login()
    {
        $data = array(
            'base_href' => base_url(),
            'page_title' => 'Home',
            'message' => ''
        );
        $this->load->view('user/login', $data);
    }
    public function process()
    {
        $this->load->model('User_model', 'auth');
        $user        = $this->input->post('user');
        $password    = $this->input->post('password');
        $words       = explode(' ', $user);
        $word        = array_pop($words);
        $first_chunk = implode(' ', $words);
        $light       = $this->auth->login($first_chunk, $word, $password);
        if ($light == "FALSE") {
            $data = array(
                'base_href' => base_url(),
                'page_title' => 'Login',
                'message' => 'Invalid Username or Password'
            );
            $this->load->view('user/login', $data);
        } else {
            $newdata = array(
                'uuid' => $light,
                'name' => $first . '.' . $last,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('/');
        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/user/login');
    }
    public function forgot()
    {
        $this->load->model('User_model', 'auth');
        $data = array(
            'base_href' => base_url(),
            'page_title' => 'Forgot Password'
        );
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/forgot', $data);
        } else {
            $email    = $this->input->post('email');
            $clean    = $this->security->xss_clean($email);
            $userInfo = $this->auth->getUserInfoByEmail($clean);
            $token    = $this->auth->insertToken($userInfo->PrincipalID);
            $qstring  = $this->base64url_encode($token);
            $url      = site_url() . 'user/reset_password/' . $qstring;
            $link     = '<a href="' . $url . '">' . $url . '</a>';
            $message  = '';
            $message .= '<strong>A password reset has been requested for this email account</strong><br>';
            $message .= '<strong>Please click:</strong> ' . $link;
            echo $message; //send this through mail
            exit;
        }
    }
	  public function base64url_encode($data) { 
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 
    public function base64url_decode($data) { 
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }       
}
?>
