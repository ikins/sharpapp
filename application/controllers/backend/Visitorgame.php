<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitorgame extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor Game";
	private $menu 	= "visitorgame";
	
	public function __construct()
	{
		parent::__construct();
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('games_model');
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
		$data['main_content'] = 'backend/'.$this->ctrl.'/game/main';
		$data['list'] = $this->games_model->game_visitor_list();
		$this->load->view('template/backend/view', $data);
	}

}