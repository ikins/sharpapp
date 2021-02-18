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

		//User Login
		$this->is_user_sharp();

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

	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_user_sharp');
		redirect('/');
	}

	public function dashboard()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/main';
		$this->load->view('template/backend/view', $data);
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