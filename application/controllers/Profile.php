<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->check_login();
		$this->load->model('user_model','UserModel');
	}

	public function index() {

		$this->form_validation->set_rules('name','Name','required|max_length[30]');
		$this->form_validation->set_rules('email','Email','required|max_length[30]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('include_files/header');
			$this->load->view('include_files/nav');
			$this->load->view('profile');
			$this->load->view('login_nav/login_footer');
		} else {
			$data = array (
				'name' => $this->input->post('name', TRUE),
				'email' => $this->input->post('email', TRUE),
			);
			
			$result = $this->UserModel->update_user($this->session->userdata('email'), $data);


			if($result > 0) {
				$session_data = array (
					'username' => $data['name'],
					'email' => $data['email'],
				);
				$this->session->set_userdata($session_data);
				$this->session->set_flashdata('success_msg', 'User Profile Updated');
				return redirect('profile');
			} else {
				$this->session->set_flashdata('msg', 'User Profile Not Updated');
				return redirect('profile');
		}		
	}
}
}