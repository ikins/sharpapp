<?php
class Product_model extends CI_Model {

//
function add_visitor_daily_product($data)
	{					
		$insert = $this->db->insert('visitor_product', $data);
		return $insert;					
	}

	

function product_count($date)
	{	

		$q_audio = $this->db->select('COUNT(*) as audio', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '1')
		->where('a.vp_date', $date);

		$tmp_audio = $q_audio->get()->result();
	
		$result['count_audio'] = $tmp_audio[0]->audio;

		$q_ref = $this->db->select('COUNT(*) as ref', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '2')
		->where('a.vp_date', $date);

		$tmp_ref = $q_ref->get()->result();

		$result['count_ref'] = $tmp_ref[0]->ref;

		$q_wm= $this->db->select('COUNT(*) as wm', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '3')
		->where('a.vp_date', $date);

		$tmp_wm = $q_wm->get()->result();
	
		$result['count_wm'] = $tmp_wm[0]->wm;

		$q_ac= $this->db->select('COUNT(*) as ac', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '4')
		->where('a.vp_date', $date);

		$tmp_ac = $q_ac->get()->result();

		$result['count_ac'] = $tmp_ac[0]->ac;

		$q_sh= $this->db->select('COUNT(*) as sh', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '5')
		->where('a.vp_date', $date);

		$tmp_sh = $q_sh->get()->result();
	
		$result['count_sh'] = $tmp_sh[0]->sh;

		$q_sl= $this->db->select('COUNT(*) as sl', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '6')
		->where('a.vp_date', $date);

		$tmp_sl = $q_sl->get()->result();

		$result['count_sl'] = $tmp_sl[0]->sl;

		return $result;
	}

function product_list()
	{	
		$q = $this->db->select('a.*')
				
		->from('visitor_product a')
		->order_by('a.vp_id DESC');			
					
		$result = $q->get()->result();
		return $result;
	}

function product_list_graph($date)
	{	

		$q_audio = $this->db->select('COUNT(*) as audio', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '1')
		->where('a.vp_date', $date);

		$tmp_audio = $q_audio->get()->result();
		
		$audio = 'Audio Visual';
		$audio_y = $tmp_audio[0]->audio;

		$q_ref = $this->db->select('COUNT(*) as ref', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '2')
		->where('a.vp_date', $date);

		$tmp_ref = $q_ref->get()->result();

		$ref = 'Refrigenerator';
		$ref_y = $tmp_ref[0]->ref;

		$q_wm= $this->db->select('COUNT(*) as wm', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '3')
		->where('a.vp_date', $date);

		$tmp_wm = $q_wm->get()->result();
	
		$wm = 'Washing Machine';
		$wm_y = $tmp_wm[0]->wm;

		$q_ac= $this->db->select('COUNT(*) as ac', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '4')
		->where('a.vp_date', $date);

		$tmp_ac = $q_ac->get()->result();

		$ac = 'Air Conditioner & Air Purifier';
		$ac_y = $tmp_ac[0]->ac;

		$q_sh= $this->db->select('COUNT(*) as sh', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '5')
		->where('a.vp_date', $date);

		$tmp_sh = $q_sh->get()->result();
		
		$sh = 'Small Home Appliance';
		$sh_y = $tmp_sh[0]->sh;

		$q_sl= $this->db->select('COUNT(*) as sl', FALSE)
		->from('visitor_product a')
		->where('a.vp_product_category', '6')
		->where('a.vp_date', $date);

		$tmp_sl = $q_sl->get()->result();

		$sl = 'Smartphone & Laptop';
		$sl_y = $tmp_sl[0]->sl;


		$result = array(
					array('name' => $audio, 'y' => intval($audio_y)),
                    array('name' => $ref, 'y' => intval($ref_y)),
                    array('name' => $wm, 'y' => intval($wm_y)),
                    array('name' => $ac, 'y' => intval($ac_y)),
                	array('name' => $sh, 'y' => intval($sh_y)),
                	array('name' => $sl, 'y' => intval($sl_y))
                );


		return $result;
	}

function product_count_all()
	{
		$q_all = $this->db->select('COUNT(*) as product', FALSE)
		->from('visitor_product a');

		$tmp_all = $q_all->get()->result();

		$result['count_all'] = $tmp_all[0]->product;
		return $result;
	}	

}