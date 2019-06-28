<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('welcome_message');
		$this->load->view('include_files/footer');
	}
}
