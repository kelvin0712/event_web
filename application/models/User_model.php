<?php 

class User_model extends CI_model 
{
	public function update_user($email, $data) {
		$this->db->set($data);
		$this->db->where('email', $email);
		$this->db->update('user_info');

		if($this->db->affected_rows() > 0) {
			return true;
		} else{	
			return false;
		}

	}
}	
?>