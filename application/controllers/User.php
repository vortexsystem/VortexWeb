
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
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
            $account_data = $this->auth->getUserInfo($light);
            if ($account_data->active == "1") {
                $newdata = array(
                    'uuid' => $light,
                    'name' => $user,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('/');
            } else {
                die('Your account is suspended, please contact the Grid Owner');
            }
            
        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/user/login');
    }
    public function register()
    {
        $data = array(
            'base_href' => base_url(),
            'page_title' => 'Register'
        );
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/register', $data);
        } else {
            
        }
    }
    
}
?>
