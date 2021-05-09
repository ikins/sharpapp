<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	private $ctrl 	= "games";
	private $title 	= "Games";
	private $menu 	= "games";

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }

		parent::__construct();

		$this->load->library('user_agent');
		//
		$this->load->library('email');
        $this->load->config('email');
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
			'game_date' 	=> date('Y-m-d'),

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
		
		if ($this->agent->is_mobile())
		{
			$data['main_content'] = 'frontend/games/mobile';
			$this->load->view('template/frontend/view', $data);
		}
 
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

	public function quota()
	{
		$data['title'] = 'Sharp Games Kuota Terpenuhi';						
		$data['main_content'] = 'frontend/games/quota';
		$this->load->view('template/frontend/view', $data);

	}

	public function limit()
	{
		$data['title'] = 'Sharp Games Kuota Limit';						
		$data['main_content'] = 'frontend/games/limit';
		$this->load->view('template/frontend/view', $data);

	}

	//
	public function check()
	{
        //
		$game_id 	= $this->input->get('gameID');
		$token_id 	= $this->input->get('tokenID');
		$score 	= $this->input->get('score');
		//
		$today = date('Y-m-d');

		//check kuota peruser mak 2 voucher
		$user = $this->games_model->g_email_user($game_id);
		$game_email = $user['email'];
		//echo $game_email;
		//
		$count_v = $this->games_model->g_count_v($game_email);
		$count_voucher = $count_v['count_v'];
		//echo $count_voucher;
		if($count_voucher >= 2){
			redirect('games/limit');
		}else{
			// voucher
			$vf = $this->games_model->g_voucher();
			$game_voucher = $vf['voucher'];
			$game_quota = $vf['quota'];
			
			//check pembatasan kuota penerima voucher game
			$kuota = $this->games_model->g_kuota($today);
			$kuota_today = $kuota['count_kuota'];
			//
			//echo $kuota_today;
			//25 email pertama statur dapet reward
			if($kuota_today > $game_quota){
				//kuota sudah terpenuhi
				redirect('games/quota');
			}else{
				//kirim email
				///---------------------------------------

				//check games
				$result = $this->games_model->g_check($game_id);
				foreach ($result as $row) {
					//
					$game_email = $row->game_email;
					//
					$reward = $row->game_reward;
					if($reward == '1'){

						//send email
						$from 	= "sharpvirtualexhibition.id <hello@sharpvirtualexhibition.id>";
						$_from 	= "hello@sharpvirtualexhibition.id";
						$_me 	= "Sharp Virtual Exhibition";

				        $subject = 'Sharp Virtual Exhibition | Game | Voucher';

				        $data['_voucher'] = $game_voucher;
				        //
				        $email_body = $this->load->view('template/email/game', $data, true);

				        $this->email->set_newline("\r\n");
				        $this->email->from($from);
				        $this->email->to($game_email);
				        $this->email->subject($subject);
				        $this->email->message($email_body);
				        $this->email->set_mailtype("html");
				        $this->email->reply_to($_from, $_me);

				        //
				        if ($this->email->send()) {
				            redirect('games/success');
				        }else{
				        	// echo 'failed <br>';
				        	// echo $reward."<br>";
				        	// echo $game_voucher."<br>";
				        	// echo $game_email."<br>";
				        	redirect('games/success');
				        	//echo  $this->email->print_debugger();
				        }
						//
						
					}else{
						redirect('games/failed');	
					}
				}
			}
		}
			
		

	}

}