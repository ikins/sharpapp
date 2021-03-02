<?php
class Voucher_model extends CI_Model {

//add new
function v_add($data)
	{					
		$insert = $this->db->insert('voucher', $data);
		return $insert;					
	}

//list
function v_list()
	{	

		$q = $this->db->select('a.*')
				
		->from('voucher a');			
					
		$result = $q->get()->result();
		return $result;

	}

function v_detail($v_id)
	{	

		$q = $this->db->select('a.*')
				
		->from('voucher a')
		->where('a.v_id', $v_id);			
					
		$result = $q->get()->result();
		return $result;

	}

function v_edit($v_id, $data)
	{					
		$this->db->where('v_id', $v_id);
		$this->db->update('voucher', $data);				
	}


}