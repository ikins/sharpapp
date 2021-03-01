<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	private $ctrl 	= "games";
	private $title 	= "Games";
	private $menu 	= "games";

	public function __construct()
	{
		parent::__construct();

		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('games_model');
	}

	public function register()
	{
		$data['title'] = 'Sharp Games Register';						
		$data['main_content'] = 'frontend/games/register';
		$this->load->view('template/frontend/view', $data);

	}

	public function save()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		//insert new ip
		$data = array(

			'game_name' 	=> $name,
			'game_email' 	=> $email,
			'game_phone' 	=> $phone,

		);
		$result = $this->games_model->game_register($data);

		if($result){
			redirect('games/play');
		}

	}

	public function play()
	{
		$data['title'] = 'Sharp Games Play';						
		$data['main_content'] = 'frontend/games/play';
		$this->load->view('template/frontend/view', $data);

	}

	public function success()
	{
		$data['title'] = 'Sharp Games Success';						
		$data['main_content'] = 'frontend/games/success';
		$this->load->view('template/frontend/view', $data);

	}

	public function failed()
	{
		$data['title'] = 'Sharp Games Failed';						
		$data['main_content'] = 'frontend/games/failed';
		$this->load->view('template/frontend/view', $data);

	}

}