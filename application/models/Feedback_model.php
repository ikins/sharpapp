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

		$q_voucher = $this->db->select('v_code as voucher, v_quota as quota', FALSE)
		->from('voucher a')
		->where('a.v_status', "1")
		->where('a.v_category', "1");

		$tmp_voucher = $q_voucher->get()->result();

		$result['voucher'] = $tmp_voucher[0]->voucher;
		$result['quota'] = $tmp_voucher[0]->quota;
		return $result;

	}

function feedback_count_all()
	{
		$q_all = $this->db->select('COUNT(*) as f_all', FALSE)
		->from('feedback a');

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->f_all;
		return $result;
	}	

function feedback_count_today($date)
	{
		$q_all = $this->db->select('COUNT(*) as today', FALSE)
		->from('feedback a')
		->where('a.fb_date', $date);

		$tmp_all = $q_all->get()->result();

		$result['count_today'] = $tmp_all[0]->today;
		return $result;
	}	

function fb_kuota($today)
	{
		$q_all = $this->db->select('COUNT(*) as kuota', FALSE)
		->from('feedback a')
		->where('a.fb_date',$today);

		$tmp_all = $q_all->get()->result();

		$result['count_kuota'] = $tmp_all[0]->kuota;
		return $result;
	}

}