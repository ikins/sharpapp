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
				
		->from('feedback a')
		->order_by('a.fb_id DESC');		
					
		$result = $q->get()->result();
		return $result;

	}

function feedback_visitor_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_feedback a');			
					
		$result = $q->get()->result();
		return $result;
	}

function fb_voucher()
	{	

		$q_voucher = $this->db->select('v_code as voucher', FALSE)
		->from('voucher a')
		->where('a.v_status', "1")
		->where('a.v_category', "1");

		$tmp_voucher = $q_voucher->get()->result();

		$result['voucher'] = $tmp_voucher[0]->voucher;
		return $result;

	}

}