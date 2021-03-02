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