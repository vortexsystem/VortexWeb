<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {
	
	public function index()
	{
		 $data = array(
        'base_href' => base_url(),
        'page_title' => 'Store'     
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('search/index',$data);
		$this->load->view('template_part/footer', $data);
	}
}
