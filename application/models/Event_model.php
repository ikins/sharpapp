<?php
class Event_model extends CI_Model {

//daily add new
function add_visitor_daily_event($data)
	{					
		$insert = $this->db->insert('visitor_event_live', $data);
		return $insert;					
	}

function event_count()
	{	

		$q_all = $this->db->select('COUNT(*) as eventlive', FALSE)
		->from('visitor_event_live a');

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->eventlive;

		$q_event = $this->db->select('COUNT(*) as event', FALSE)
		->from('visitor_event_live a')
		->where('a.vel_category', '1');

		$tmp_event = $q_event->get()->result();
	
		$result['count_event'] = $tmp_event[0]->event;

		$q_live = $this->db->select('COUNT(*) as live', FALSE)
		->from('visitor_event_live a')
		->where('a.vel_category', '2');

		$tmp_live = $q_live->get()->result();

		$result['count_live'] = $tmp_live[0]->live;

		return $result;
	}

function event_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_event_live a')
		->order_by('a.vel_id DESC');		
					
		$result = $q->get()->result();
		return $result;
	}

}