<?php
class Games_model extends CI_Model {

//add new
function g_add($data)
	{					
		$insert = $this->db->insert('game', $data);
		return $insert;					
	}

//list
function g_list()
	{	

		$q = $this->db->select('a.*')
				
		->from('game a');			
					
		$result = $q->get()->result();
		return $result;

	}

}