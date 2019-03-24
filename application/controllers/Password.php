<?php
class Password extends CI_Controller
{
    public function forget()
    {
        $data = array(
            'base_href' => base_url(),
            'page_title' => 'Home',
            'message' => ''
        );
        
        if (isset($_GET['info'])) {
            $data['info'] = $_GET['info'];
        }
        if (isset($_GET['error'])) {
            $data['error'] = $_GET['error'];
        }
        
        $this->load->view('user/forget', $data);
    }

    public function doforget()
    {
        $this->load->helper('url');
        $email = $_POST['email'];
        $q     = $this->db->query("select * from users where email='" . $email . "'");
        if ($q->num_rows > 0) {
            $r    = $q->result();
            $user = $r[0];
            $this->resetpassword($user);
            $info = "Password has been reset and has been sent to email id: " . $email;
            redirect('/index.php/login/forget?info=' . $info, 'refresh');
        }
        $error = "The email id you entered not found on our database ";
        redirect('/index.php/login/forget?error=' . $error, 'refresh');
        
    }
    
    private function resetpassword($user)
    {
        date_default_timezone_set('GMT');
        $this->load->helper('string');
        $password = random_string('alnum', 16);
        $this->db->where('id', $user->id);
        $this->db->update('users', array(
            'password' => MD5($password)
        ));
        $this->load->library('email');
        $this->email->from('cantreply@youdomain.com', 'Your name');
        $this->email->to($user->email);
        $this->email->subject('Password reset');
        $this->email->message('You have requested the new password, Here is you new password:' . $password);
        $this->email->send();
    }  
}
?>
