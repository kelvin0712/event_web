<?php
class Event_model extends CI_Model {
	 public function __construct() {
		$this->load->database();
		}
	 public function get_title ($title = FALSE){
	 		if ($title === FALSE) {
				$query = $this->db->get('event');
				return $query->result_array();
				}
			$query = $this->db->get_where('event',
								array('title' => $title));

			return $query->row_array();
			  
		 }
 
			}