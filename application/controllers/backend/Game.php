<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	private $ctrl 	= "game";
	private $title 	= "Game";
	private $menu 	= "game";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');
		
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
			redirect('/login');
		}	
	}

	public function main()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/main';
		$data['list'] = $this->games_model->g_list();
		$this->load->view('template/backend/view', $data);
		
	}
}