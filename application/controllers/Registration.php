<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Login controller 
*/

class Registration extends MY_Controller
{
	public function __construct() {
		parent::__construct();
        $this->load->helper('captcha');
	}

	public function index()
	{

        $vals = array (
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/',
            'expiration' => 7200,
            'word_length' => 3,
            'font_size' => 22,
        ); 

        $cap = create_captcha($vals);
        $data['captcha'] = $cap['image'];

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('captcha','Captcha','required|callback_matching_captcha');
		$this->form_validation->set_rules('confirmpassword','ConfirmPassword','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user_info.email]');
		if ($this->form_validation->run() == FALSE)
                {
                
                    $this->session->set_userdata('captchaWord', $cap['word']);
                    $this->load->view('include_files/header');
         			$this->load->view('login_nav/login_nav');
          			$this->load->view('registration', $data);
          			$this->load->view('login_nav/login_footer');

                }
                else
                {
                    $salt_key =  $this->generateSalt();

                	$user_data = [
                		'name' => $this->input->post('name', TRUE),	
                		'email' => $this->input->post('email', TRUE),	
                		'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT)	
                	];


                	$this->load->model('login_model');
                	$result = $this->login_model->register($user_data);
                	redirect('login');
                }
        }

    public function refresh_captcha() {
        $vals = array (
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/',
            'expiration' => 7200,
            'word_length' => 3,
            'font_size' => 28,
        ); 

        $cap = create_captcha($vals);
        $this->session->unset_userdata('captchaWord');
        $this->session->set_userdata('captchaWord', $cap['word']);
        echo $cap['image'];
    }  

     public function matching_captcha(){
        if(strtolower($this->input->post('captcha')) != strtolower($this->session->userdata('captchaWord'))){
            $this->form_validation->set_message('matching_captcha', 'The {field} did not matching');
            return false;
        }else{
            return true;
        }
    }  

    public function generateSalt($max = 64) {
        $characterList =
        "abcdefghijklmnopqrstuvwxyzABCDEFGHIJ
        KLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
        $i = 0;
        $salt = "";
        while ($i < $max) {
        $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
        $i++;
        }
        return $salt;
        }

}
 
