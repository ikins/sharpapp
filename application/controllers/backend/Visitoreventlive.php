<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitoreventlive extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor Event & Live";
	private $menu 	= "visitoreventlive";

	public function __construct()
	{
		parent::__construct();
		
		//Session
		$this->load->library('session');
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('event_model');
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
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/event/main';
		$result = $this->event_model->event_count();
		$data['count_all'] = $result['count_all'];
		$data['count_event'] = $result['count_event'];
		$data['count_live'] = $result['count_live'];
		$data['list'] = $this->event_model->event_list();
		$this->load->view('template/backend/view', $data);
	}
}