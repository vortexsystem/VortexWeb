<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	
	public function index()
	{
		 $data = array(
        'base_href' => base_url(),
        'page_title' => 'Store'     
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('store/index',$data);
		$this->load->view('template_part/footer', $data);
	}
  	public function buy()
	{
		 $data = array(
        'base_href' => base_url(),
        'page_title' => 'Buy'     
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('store/buy',$data);
		$this->load->view('template_part/footer', $data);
	}
	}
  	public function subscriptions()
	{
		 $data = array(
        'base_href' => base_url(),
        'page_title' => 'Subscriptions'     
);     
		
                $this->load->view('template_part/header', $data);
                $this->load->view('store/subscriptions',$data);
		$this->load->view('template_part/footer', $data);
	}

}
