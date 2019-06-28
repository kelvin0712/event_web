<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('include_files/header');
		$this->load->view('include_files/nav');
		$this->load->view('search');
		$this->load->view('login_nav/search_footer');
	}

	public  function fetch()
 {
	  $output = '';
	  $query = '';
	  $this->load->model('Search_model');
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query', TRUE);
	  }
	  $data = $this->Search_model->fetch_data($query);
	  $output .= '
	     <table class="table table bordered"  id="table1">
	      <tr>
	       <th>&nbsp;</th>
	       <th>Event Name</th>
	       <th>Time</th>
	       <th>Location</th>
	      </tr>
	  ';
	  if($data->num_rows() > 0)
	  {
	   foreach($data->result() as $row)
	   {
	    $output .= '
	      <tr>
	       <td><a class="txt3" href="'.site_url().'/view/'.$row->title.'">Go</a></td>
	       <td>'.$row->title.'</td>
	       <td>'.$row->eventTime.'</td>
	       <td>'.$row->location.'</td>
	      </tr>
	    ';
	   }
	  }
	  else
	  {
	   $output .= '<tr>
	       <td colspan="5">No Data Found</td>
	      </tr>';
	  }
	  $output .= '</table>';
	  echo $output;
 }
 
}

