<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
  	public function buy()
	{
		$this->load->view('welcome_message');
	}
  	public function subscriptions()
	{
		$this->load->view('welcome_message');
	}
}
