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
		$data = array(
        'base_href' => base_url(),
        'page_title' => 'Account Summary',
        'message' => 'My Message'
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
                $this->load->view('account/main', $data);
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
                $this->load->view('account/partners', $data);
                $this->load->view('template_part/footer', $data);


        }


}








