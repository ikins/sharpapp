<?php
class Schedule_model extends CI_Model {

//add new
function s_add($data)
	{					
		$insert = $this->db->insert('schedule', $data);
		return $insert;					
	}

//list
function s_list()
	{	

		$q = $this->db->select('a.*')
				
		->from('schedule a')
		->order_by('a.s_id DESC');		
					
		$result = $q->get()->result();
		return $result;

	}

function s_detail($s_id)
	{	

		$q = $this->db->select('a.*')
				
		->from('schedule a')
		->where('a.s_id', $s_id);			
					
		$result = $q->get()->result();
		return $result;

	}

function s_edit($s_id, $data)
	{					
		$this->db->where('s_id', $s_id);
		$this->db->update('schedule', $data);				
	}
}