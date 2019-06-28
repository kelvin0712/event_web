<?php
class MY_Controller extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        }

        public function check_login() {
        	if(empty($this->session->userdata('email')) AND empty($this->session->userdata('password')) )
        		redirect ('login');
        }
} 
?>