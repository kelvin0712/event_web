<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Event extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->helper('url_helper');
	}

	public function index() {
		$data['titles'] = $this->Event_model->get_title();
		$data['header'] = 'Events';
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('event', $data);
		$this->load->view('login_nav/login_footer');
	}

	public function read($title = NULL) {
		$data['title_item'] = $this->Event_model->get_title($title);
		if (empty($data['title_item'])) {
		show_404();
		}
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('events/view', $data);
		$this->load->view('login_nav/login_footer');
		} 

}

	
