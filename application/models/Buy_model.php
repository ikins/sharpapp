<?php
class Buy_model extends CI_Model {

//daily add new
function add_visitor_daily_buy($data)
	{					
		$insert = $this->db->insert('visitor_buy', $data);
		return $insert;					
	}

}