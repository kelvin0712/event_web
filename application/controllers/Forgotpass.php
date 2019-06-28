<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpass extends CI_Controller {

	  public function __construct()
   {
    parent::__construct();
   }

	public function index()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('forgotpass');
		$this->load->view('login_nav/login_footer');
	}

	public function reset_link() {
		$from_email = "nobido09@gmail.com";
		$email = $this->input->post('email');
		$result = $this->db->query("select * from user_info where email='".$email."'")->result_array();
		if(count($result) > 0) 
		{	 
			$this->load->library('email');
			$this->email->set_mailtype("html");
        	$this->email->from($from_email, 'Identification');
        	$this->email->to($email);
        	$this->email->subject('Reset');
			$tokan = rand(1000,9999);
			$this->db->query("update user_info set password = '".$tokan."' where email = '".$email."'") ;
			$link = "Please click the password reset link <br> <a href='".base_url('forgotpass/reset?tokan=').$tokan."'> Reset password </a>";
			$this->email->message($link);

			 if($this->email->send())
	            echo "success";
	        else
	          	 show_error($this->email->print_debugger());
		} else {
			$this->session->set_flashdata('message',"Email not resgistered");
			redirect('forgotpass');
		}
	}

	public function reset() {
		$tokan = $this->input->get('tokan');
		$this->load->view('resetpass');
		$_SESSION['tokan'] = $tokan;
	}

	public function updatepass() {
		$_SESSION['tokan'];
		$pass = $this->input->post();
		if($pass['password'] == $pass['conpassword']) {
			$this->db->query("update user_info set password = '".$pass['password']."' where password = '".$_SESSION['tokan']."'") ;
			header('login');
		} else {
			header('login');
		}
	}
}	

