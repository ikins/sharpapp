<?php
class Feedback_model extends CI_Model {

//add new
function fb_add_feedback($data)
	{					
		$insert = $this->db->insert('feedback', $data);
		return $insert;					
	}

//list
function fb_list()
	{	

		$q = $this->db->select('a.*')
				
		->from('feedback a');			
					
		$result = $q->get()->result();
		return $result;

	}

}