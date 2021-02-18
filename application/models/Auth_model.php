<?php
class Auth_model extends CI_Model {

//user login valid
function valid_login($email, $password)
	{		

		$q = $this->db->select('*')
			
			->from('core_user')
			->where('email', $email)
			->where('password', $password);			
				
			$result = $q->get()->result();
			return $result;
				
	}

}