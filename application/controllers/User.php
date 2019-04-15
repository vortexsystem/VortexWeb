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
    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
    public function reset_password($runner)
    {
      $this->load->model('User_model', 'auth');
        $token      = $this->base64url_decode($runner);
        $cleanToken = $this->security->xss_clean($token);
        $user_info = TRUE;
        //$user_info = $this->auth->isTokenValid($cleanToken); //either false or array();               
        
        if (!$user_info) {
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url() . 'user/login');
        }
        $data = array(
            'firstName' => $user_info->first_name,
            'email' => $user_info->email,
            //                'user_id'=>$user_info->id, 
            'token' => $this->base64url_encode($token)
        );
        
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/reset_password', $data);
        } else {
            
            $this->load->library('password');
            $post                  = $this->input->post(NULL, TRUE);
            $cleanPost             = $this->security->xss_clean($post);
            $hashed                = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['user_id']  = $user_info->id;
            unset($cleanPost['passconf']);
            if (!$this->auth->updatePassword($cleanPost)) {
                $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
            } else {
                $this->session->set_flashdata('flash_message', 'Your password has been updated. You may now login');
            }
            redirect(site_url() . 'user/login');
        }
    }
    
}
?>
