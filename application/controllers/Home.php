<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!$this->session->userdata('LOGGED_IN'))
		{
			redirect('user/login');
		}
		$data = array(
        'base_href' => base_url(),
        'page_title' => 'Home',
        'message' => 'My Message'
);
		$this->load->view('template_part/header', $data);
		$this->load->view('home/main', $data);
		$this->load->view('template_part/footer', $data);
	}
}

