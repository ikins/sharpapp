<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitordaily extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor Daily";
	private $menu 	= "visitordaily";
	
	public function __construct()
	{
		parent::__construct();
		
		//Session
		$this->load->library('session');
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('daily_model');
	}

	//login
	function is_user_sharp()
	{
		$is_user_sharp = $this->session->userdata('is_user_sharp');
		
		if(!isset($is_user_sharp) || $is_user_sharp != true)
		{
			redirect('/login');
		}	
	}

	public function main()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/daily/main';
		$data['list'] = $this->daily_model->daily_list();
		$this->load->view('template/backend/view', $data);
	}

	public function history()
	{
		//dashboard
		$data['title'] = $this->title."History";
		$data['main_content'] = 'backend/'.$this->ctrl.'/daily/history';
		$data['history'] = $this->daily_model->daily_history();
		$this->load->view('template/backend/view', $data);
	}
}