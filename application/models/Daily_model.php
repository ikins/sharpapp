<?php
class Daily_model extends CI_Model {


//last daily visitor
function get_last_daily($date)
	{		

		$q = $this->db->select('*')
			
			->from('visitor_daily')
			->where('vd_date', $date)		
			->limit(1);

		$result = $q->get()->result();
		return $result;
				
	}

//last daily visitor history
function get_last_daily_history($ip, $date)
	{		

		$q = $this->db->select('*')
			
			->from('visitor_daily_history')
			->where('vh_ip', $ip)
			->where('vh_date', $date)		
			->limit(1);

		$result = $q->get()->result();
		return $result;
				
	}

//daily add new
function add_visitor_daily($data)
	{					
		$insert = $this->db->insert('visitor_daily', $data);
		return $insert;					
	}

//daily history add new
function add_visitor_daily_history($data_history)
	{					
		$insert = $this->db->insert('visitor_daily_history', $data_history);
		return $insert;					
	}

//daily update post
function update_visitor_daily_post($vd_id, $data)
	{					
		$this->db->where('vd_id', $vd_id);
		$this->db->update('visitor_daily', $data);				
	}
			

}