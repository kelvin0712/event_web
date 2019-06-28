<?php 

class Login_model extends CI_model 
{
	public function __construct() {
		parent::__construct();
	}


	public function register($user_data) {
		return $this->db->insert('user_info', $user_data);
	}

	public function login_user($where){
		$query = $this->db->where($where)
                     ->get('user_info')	;

        if( $query -> num_rows()>0)
        	return $query;
        else 
        	return false;

	}
}

