<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_model extends CI_Model {
 public function insert_image($image)
 {
  // assign the data to an array
  $data = array(
   'title' => $this->input->post('title', TRUE),
   'eventTime' => $this->input->post('eventTime', TRUE),
   'location' => $this->input->post('location', TRUE),
   'image' => $image
  );
  //insert image to the database
  $this->db->insert('event', $data);
 }
 }





 