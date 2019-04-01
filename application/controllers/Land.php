<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land extends CI_Controller {

	
	function __construct()
      {
        parent::__construct();
	 	$this->load->helper('url');
		$this->load->database('robust');	   
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
                $this->load->view('welcome_message');
        }
        public function regions()
        {
		$this->load->model('Region_model', 'land');
		$current_user = $this->session->uuid;
		$region_array = $this->land->get_regions_by_owner_uuid($current_user, 10);
               $data = array(
        'base_href' => base_url(),
        'page_title' => 'Manage Regions',
        'region_array' => $region_array
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('land/manage',$data);
		$this->load->view('template_part/footer', $data);
        }
	public function region($region_needed)
        {
	$this->load->model('Region_model', 'land');
		$region_array = $this->land->get_region_info($region_needed);
               $data = array(
        'base_href' => base_url(),
        'page_title' => 'Region',
        'region_array' => $region_array	       
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('land/region',$data);
		$this->load->view('template_part/footer', $data);
        }n

}








