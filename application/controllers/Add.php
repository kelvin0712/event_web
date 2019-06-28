<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	  public function __construct()
   {
    parent::__construct();
    $this->load->model('Add_model');
   }

	public function index()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('add');
		$this->load->view('login_nav/login_footer');
	}

	 public function add_image()
   {
    // CI form validation
    $this->form_validation->set_rules('title', 'Event Name', 'required');
    $this->form_validation->set_rules('location', 'Event Location', 'required');
    if ($this->form_validation->run() == FALSE){
     $this->load->view('include_files/header');
     $this->load->view('include_files/nav');
     $this->load->view('add');
     $this->load->view('include_files/footer');
          }
    else {
     $filesCount = count($_FILES['userfile']['name']); 
     for($i = 0; $i < $filesCount; $i++){
       // configurations from upload library
       $config['upload_path'] = './assets/image';
       $config['allowed_types'] = 'gif|jpg|png|jpeg';
       $config['max_size'] = '2048000'; // max size in KB
       $config['max_width'] = '20000'; //max resolution width
       $config['max_height'] = '20000';  //max resolution height
       // load CI libarary called upload
       $this->load->library('upload', $config);
       // body of if clause will be executed when image uploading is failed
       if(!$this->upload->do_upload()){
        $errors = array('error' => $this->upload->display_errors());
        // This image is uploaded by deafult if the selected image in not uploaded
        $image = 'no_image.png';    
       }
       // body of else clause will be executed when image uploading is succeeded
       else{
        $data = array('upload_data' => $this->upload->data());
        $image = $_FILES['userfile']['name'];  //name must be userfile
        
       } }
     $this->Add_model->insert_image($image);
     $this->session->set_flashdata('success','Image stored');
     redirect('add');
    }
   }
}

