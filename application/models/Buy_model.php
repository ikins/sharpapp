<?php
class Buy_model extends CI_Model {

//daily add new
function add_visitor_daily_buy($data)
	{					
		$insert = $this->db->insert('visitor_buy', $data);
		return $insert;					
	}
 
function buy_count($date)
	{	

		$q_all = $this->db->select('COUNT(*) as buy', FALSE)
		->from('visitor_buy a')
		->where('a.vb_date', $date);

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->buy;

		$q_audio = $this->db->select('COUNT(*) as audio', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '1')
		->where('a.vb_date', $date);

		$tmp_audio = $q_audio->get()->result();
	
		$result['count_audio'] = $tmp_audio[0]->audio;

		$q_ref = $this->db->select('COUNT(*) as ref', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '2')
		->where('a.vb_date', $date);

		$tmp_ref = $q_ref->get()->result();

		$result['count_ref'] = $tmp_ref[0]->ref;

		$q_wm= $this->db->select('COUNT(*) as wm', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '3')
		->where('a.vb_date', $date);

		$tmp_wm = $q_wm->get()->result();
	
		$result['count_wm'] = $tmp_wm[0]->wm;

		$q_ac= $this->db->select('COUNT(*) as ac', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '4')
		->where('a.vb_date', $date);

		$tmp_ac = $q_ac->get()->result();

		$result['count_ac'] = $tmp_ac[0]->ac;

		$q_sh= $this->db->select('COUNT(*) as sh', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '5')
		->where('a.vb_date', $date);

		$tmp_sh = $q_sh->get()->result();
	
		$result['count_sh'] = $tmp_sh[0]->sh;

		$q_sl= $this->db->select('COUNT(*) as sl', FALSE)
		->from('visitor_buy a')
		->where('a.vb_product_category', '6')
		->where('a.vb_date', $date);

		$tmp_sl = $q_sl->get()->result();

		$result['count_sl'] = $tmp_sl[0]->sl;

		return $result;
	}

function buy_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_buy a')
		->order_by('a.vb_id DESC');			
					
		$result = $q->get()->result();
		return $result;
	}

function buy_count_all()
	{
		$q_all = $this->db->select('COUNT(*) as buy', FALSE)
		->from('visitor_buy a');

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->buy;
		return $result;
	}

}