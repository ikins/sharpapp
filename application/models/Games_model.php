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
				
		->from('game a')
		->order_by('a.game_id DESC');			
					
		$result = $q->get()->result();
		return $result;

	}

function game_visitor_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_game a')
		->order_by('a.vg_id DESC');			
					
		$result = $q->get()->result();
		return $result;
	}

function game_register($data)
	{

		$insert = $this->db->insert('game', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
		$insert = $this->db->insert('game', $data);
		return $insert;	
	}

function game_update_status($gameID, $data)
	{					
		$this->db->where('game_id', $gameID);
		$this->db->update('game', $data);				
	}

function game_update_score($gameID, $data)
	{					
		$this->db->where('game_id', $gameID);
		$this->db->update('game', $data);				
	}

function game_voucher()
	{	

		$q_voucher = $this->db->select('v_code as voucher', FALSE)
		->from('voucher a')
		->where('a.v_status', "1")
		->where('a.v_category', "2");

		$tmp_voucher = $q_voucher->get()->result();

		$result['voucher'] = $tmp_voucher[0]->voucher;
		return $result;

	}

function g_player($ip)
	{	

		$q = $this->db->select('a.*')
				
		->from('game a')
		->where('a.game_ip', $ip)
		->where('a.game_score', '')
		->order_by('a.game_id DESC')
		->limit(1);			
					
		$result = $q->get()->result();
		return $result;

	}

function g_check($game_id)
	{	

		$q = $this->db->select('a.*')
				
		->from('game a')
		->where('a.game_id', $game_id)
		->order_by('a.game_id DESC')
		->limit(1);			
					
		$result = $q->get()->result();
		return $result;

	}

function game_count_all()
	{
		$q_all = $this->db->select('COUNT(*) as f_all', FALSE)
		->from('game a');

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->f_all;
		return $result;
	}	

function game_count_today($date)
	{
		$q_all = $this->db->select('COUNT(*) as today', FALSE)
		->from('game a')
		->where('a.game_date', $date);

		$tmp_all = $q_all->get()->result();

		$result['count_today'] = $tmp_all[0]->today;
		return $result;
	}

function game_count_voucher($date)
	{
		$q_all = $this->db->select('COUNT(*) as voucher', FALSE)
		->from('game a')
		->where('a.game_reward', '1');

		$tmp_all = $q_all->get()->result();

		$result['count_voucher'] = $tmp_all[0]->voucher;
		return $result;
	}	

function g_voucher()
	{	

		$q_voucher = $this->db->select('v_code as voucher, v_quota as quota', FALSE)
		->from('voucher a')
		->where('a.v_status', "1")
		->where('a.v_category', "2");

		$tmp_voucher = $q_voucher->get()->result();

		$result['voucher'] = $tmp_voucher[0]->voucher;
		$result['quota'] = $tmp_voucher[0]->quota;
		return $result;

	}

function g_kuota($today)
	{
		$q_all = $this->db->select('COUNT(*) as kuota', FALSE)
		->from('game a')
		->where('a.game_date',$today)
		->where('a.game_reward', '1');

		$tmp_all = $q_all->get()->result();

		$result['count_kuota'] = $tmp_all[0]->kuota;
		return $result;
	}

}