<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Login controller 
*/

class Login extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('login_model','LoginModel');
    $this->session->keep_flashdata('msg');

	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('include_files/header');
          					$this->load->view('login_nav/login_nav');
          					$this->load->view('login');
          					$this->load->view('login_nav/login_footer');
                }
                else
                {
                	$where = array (
                		'email' => $this->input->post('email', TRUE),
                	);
                    $result = $this->LoginModel->login_user($where);

                    if ($result > 0) {
                        $data  = $result->row_array();
                        $name  = $data['name'];
                        $email = $data['email'];
                        $password = $data['password'];
                        $sesdata = array(
                           'username'  => $name,
                           'email'     => $email,
                           'password'  => $password,
                           'logged_in' => TRUE
                       );
                       
                         if(password_verify($this->input->post('password'),$password)) {
                            $this->session->set_userdata($sesdata);
                         return redirect('home');} else {$this->session->set_flashdata('msg', 'Wrong password or Email');redirect('login');}

                    } else {
                    	$this->session->set_flashdata('msg', 'Wrong password or Email');
                    	return redirect('login');
                    }
        }
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect('login');
        }   
}  