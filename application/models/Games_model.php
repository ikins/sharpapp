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

function game_visitor_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_game a');			
					
		$result = $q->get()->result();
		return $result;
	}

function game_register($data)
	{
		$insert = $this->db->insert('game', $data);
		return $insert;	
	}

}