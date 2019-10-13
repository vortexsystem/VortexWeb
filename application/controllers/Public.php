<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Public extends CI_Controller {
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
	echo "Not A Page";
        }
                public function profile()
        {
		$data = array(
        'base_href' => base_url(),
        'page_title' => 'Profile',
);     
                $this->load->view('template_part/publicheader', $data);
		$this->load->view('public/profile', $data);
		$this->load->view('template_part/footer', $data);
        }


}
