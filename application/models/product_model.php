<?php
class Product_model extends CI_Model {

//daily add new
function add_visitor_daily_product($data)
	{					
		$insert = $this->db->insert('visitor_product', $data);
		return $insert;					
	}

}