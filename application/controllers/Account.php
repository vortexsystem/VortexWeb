<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *              http://example.com/index.php/welcome
         *      - or -
         *              http://example.com/index.php/welcome/index
         *      - or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
		// Create Data from DB first
		
		$this->load->model('Friends_model', 'friends');
		$this->load->model('Group_model', 'group');
		$current_user = $this->session->uuid;
		$friends_array = $this->friends->get_friends($current_user);
		$groups_array = $this->group->get_groups($current_user);
		$data = array(
        'base_href' => base_url(),
        'page_title' => 'Account Summary',
        'friends_array' => $friends_array,
        'groups_array' => $groups_array
);     

                $this->load->view('template_part/header', $data);
		$this->load->view('account/main', $data);
		$this->load->view('template_part/footer', $data);
        }
        public function transactions()
        {
                $data = array(
        'base_href' => base_url(),
        'page_title' => 'Account Transactions',
        'message' => 'My Message'
);

                $this->load->view('template_part/header', $data);
                $this->load->view('account/transactions', $data);
                $this->load->view('template_part/footer', $data);
        }
        public function email()
        {
		show_error("The server either does not recognize the request method, or it lacks the ability to fulfil the request. Usually this implies future availability", "501", $heading = '501 - Feature Not Implemented');
                                $data = array(
        'base_href' => base_url(),
        'page_title' => 'Email Settings',
        'message' => 'My Message'
);

                $this->load->view('template_part/header', $data);
                $this->load->view('account/emailsettings', $data);
                $this->load->view('template_part/footer', $data);


        }
        public function contact()
        {
	$data = array(
        'base_href' => base_url(),
        'page_title' => 'Contact Information',
        'message' => 'My Message'
);

                $this->load->view('template_part/header', $data);
                $this->load->view('account/contact', $data);
                $this->load->view('template_part/footer', $data);


        }
        public function partners()
        {
	$data = array(
        'base_href' => base_url(),
        'page_title' => 'Partners',
        'message' => 'My Message'
);

                $this->load->view('template_part/header', $data);
                $this->load->view('partners/proposal', $data);
                $this->load->view('template_part/footer', $data);


        }
        public function password()
        {
       $data = array(
        'base_href' => base_url(),
        'page_title' => 'Change Password',
        'message' => 'My Message'
);

                $this->load->view('template_part/header', $data);
                $this->load->view('password/password', $data);
                $this->load->view('template_part/footer', $data);


        }


}
