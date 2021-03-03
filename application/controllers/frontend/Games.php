<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	private $ctrl 	= "games";
	private $title 	= "Games";
	private $menu 	= "games";

	public function __construct()
	{
		parent::__construct();

		$this->load->library('user_agent');

		//Session
		$this->load->library('session');
		
		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('games_model');

		//
		$this->load->helper('cookie');
		$this->load->helper('string');

	}

	public function register()
	{
		$data['title'] = 'Sharp Games Register';						
		$data['main_content'] = 'frontend/games/register';
		$this->load->view('template/frontend/view', $data);

	}

	public function save()
	{
		$ip 	= $this->input->ip_address();
		$name 	= $this->input->post('name');
		$email 	= $this->input->post('email');
		$phone 	= $this->input->post('phone');
		$token_id = random_string('alnum', 8);
		//insert new ip
		$data = array(

			'game_name' 	=> $name,
			'game_email' 	=> $email,
			'game_phone' 	=> $phone,
			'game_token' 	=> $token_id,
			'game_ip' 		=> $ip,

		);
		$result = $this->games_model->game_register($data);
		redirect('games/play');
		// if($result){
		// 	//set session
		// 	$data_session = array(
		// 					'game_id' => $result,
		// 					'token_id' => $token_id,
		// 					'session_id' => 1,		
		// 					'is_game' => true
		// 				);
						
		// 	$this->session->set_userdata('is_game', $data_session);

		// 	if($this->session->userdata('is_game')){
		// 	  	$is_game = $this->session->userdata('is_game');
		// 		print_r($is_game['game_id']);
		// 		// redirect('games/play');
		// 	}else{
		// 	    echo "failed";
		// 	}
		//     // if($isGame){redirect('games/play');}else{
		//     // 	echo 'failed session';
		//     // }
		// }else{
		// 	redirect('games/play');
		// }
		
	}

	public function play()
	{
		if($this->session->userdata('is_game')){
			$is_game = $this->session->userdata('is_game');
			print_r($is_game['game_id']);
			echo "session";
		}

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

	//
	public function check()
	{
		$game_id 	= $this->input->get('gameID');
		$token_id 	= $this->input->get('tokenID');
		$score 	= $this->input->get('score');

		//check games
		$result = $this->games_model->g_check($game_id);
		foreach ($result as $row) {
			$reward = $row->game_reward;
			if($reward == '1'){
				redirect('games/success');
			}else{
				redirect('games/failed');	
			}
		}

	}

}