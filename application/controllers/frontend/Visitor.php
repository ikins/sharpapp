<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor";
	private $menu 	= "visitor";

	public function __construct()
	{
		parent::__construct();

		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('product_model');
		$this->load->model('buy_model');
		
	}

	public function visit_product_category()
	{
		$ip = $this->input->ip_address();
		$date  = date("Y-m-d"); // today date
		$vp_product_category = $this->input->post('category');
		//insert new ip
		$data = array(

			'vp_ip' 	=> $ip,
			'vp_product_category' 	=> $vp_product_category,

		);
		$result = $this->product_model->add_visitor_daily_product($data);
	}

	public function visit_buy()
	{
		$ip = $this->input->ip_address();
		$date  = date("Y-m-d"); // today date
		$vb_product_category = $this->input->post('category');
		//insert new ip
		$data = array(

			'vb_ip' 	=> $ip,
			'vb_product_category' 	=> $vb_product_category,

		);
		$result = $this->buy_model->add_visitor_daily_buy($data);
	}
}