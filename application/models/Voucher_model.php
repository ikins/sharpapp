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

}