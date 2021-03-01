<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitorproduct extends CI_Controller {

	private $ctrl 	= "product";
	private $title 	= "Visitor Product";
	private $menu 	= "visitorproduct";

	public function __construct()
	{
		parent::__construct();
		
		//Session
		$this->load->library('session');
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('product_model');
	}

	//login
	function is_user_sharp()
	{
		$is_user_sharp = $this->session->userdata('is_user_sharp');
		
		if(!isset($is_user_sharp) || $is_user_sharp != true)
		{
			redirect('/');
		}	
	}

	public function main()
	{
		$date = date('Y-m-d');
		$data['today'] = $date;
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/visitor/'.$this->ctrl.'/main';
		$result = $this->product_model->product_count($date);
		$data['count_audio'] = $result['count_audio'];
		$data['count_ref'] = $result['count_ref'];
		$data['count_wm'] = $result['count_wm'];
		$data['count_ac'] = $result['count_ac'];
		$data['count_sh'] = $result['count_sh'];
		$data['count_sl'] = $result['count_sl'];
		$data['list'] = $this->product_model->product_list();
		$this->load->view('template/backend/view', $data);
	}

	
}