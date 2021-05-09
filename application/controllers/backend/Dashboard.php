<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $ctrl 	= "dashboard";
	private $title 	= "Dashboard";
	private $menu 	= "dashboard";

	public function __construct()
	{
		parent::__construct();

		$this->load->library('user_agent');

		//Session
		$this->load->library('session');
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('product_model');
		$this->load->model('daily_model');
		$this->load->model('buy_model');
		$this->load->model('feedback_model');
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

	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_user_sharp');
		redirect('/login');
	}

	public function dashboard()
	{	
		$date = date('Y-m-d');
		$data['today'] = $date;
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/main';
		$list = $this->product_model->product_list_graph($date);
		//print_r(json_encode($list));
		$data['list'] = json_encode($list);
		$data['history'] = $this->daily_model->daily_history();
		//daily visitor
		$daily = $this->daily_model->daily_count();
		$data['count_all_daily'] = $daily['count_all'];
		//product visitor
		$product = $this->product_model->product_count_all();
		$data['count_all_product'] = $product['count_all'];
		//buy visitor
		$buy = $this->buy_model->buy_count_all();
		$data['count_all_buy'] = $buy['count_all'];
		//feedback all
		$feedback_all = $this->feedback_model->feedback_count_all();
		$data['count_all_feedback'] = $feedback_all['count_all'];
		//feedback today
		$feedback_today = $this->feedback_model->feedback_count_today($date);
		$data['count_today_feedback'] = $feedback_today['count_today'];
		//
		//game all
		$game_all = $this->games_model->game_count_all();
		$data['count_all_game'] = $game_all['count_all'];
		//game today
		$game_today = $this->games_model->game_count_today($date);
		$data['count_today_game'] = $game_today['count_today'];
		//game voucher
		$game_voucher = $this->games_model->game_count_voucher($date);
		$data['count_voucher_game'] = $game_voucher['count_voucher'];
		$this->load->view('template/backend/view', $data);

		//echo "Cookie : ".get_cookie('cookie_name');
	}	

	public function reqip()
	{
		// $data['title'] = ('Req Ip');
		// $this->load->view('backend/dashboard', $data);

		$data['browser'] = $this->agent->browser();
		$data['os'] = $this->agent->platform();
  		$data['ip_address'] = $this->input->ip_address();

  		
  		//
  		$browser = $this->agent->browser();
  		$os = $this->agent->platform();
  		$ip = $this->input->ip_address();

		print_r($ip."<br>".$browser."<br>".$os."<br>");

		$mobile = $this->agent->is_mobile();

		if($mobile){
			echo "mobile";
		}else{
			echo "desktop";
		}


	}
}