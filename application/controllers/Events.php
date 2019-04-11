<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	
	function __construct()
      {
        parent::__construct();   
      }
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
        'page_title' => 'Events'
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('event/index',$data);
		$this->load->view('template_part/footer', $data);
        }
        public function edit($event_id)
        {
               $data = array(
        'base_href' => base_url(),
        'page_title' => 'Edit Events'
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('event/edit',$data);
		$this->load->view('template_part/footer', $data);
        }	
}
